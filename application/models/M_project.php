<?php
class M_project extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $db = $this->load->database('default');
    }
    
    public function getIdBySimbol($simbol){
        $this->db->select('project_id');
        $this->db->where('simbol',$simbol);
        $this->db->from('project');
        $this->db->where('delete_yn','N');
        
        $query = $this->db->get();
        
        if ($query->result_array() != null){
            return $query->row_array()['project_id'];
        }else{
            return null;
        }
    }
    public function getDetail($project_id){
        $this->db->where('project_id',$project_id);
        $this->db->from('project');
        $this->db->where('delete_yn','N');
        
        $query = $this->db->get();
        
        if ($query->result_array() != null){
            return $query->row_array();
        }else{
            return null;
        }
    }
    
    public function getSnsByProjectid($project_id){
        $this->db->where('project_id',$project_id);
        $this->db->from('sns');
        
        $query = $this->db->get();
        
        if ($query->result_array() != null){
            return $query->result_array();
        }else{
            return null;
        }
    }
    
    public function getPersonByProjectid($project_id){
        $this->db->where('project_id',$project_id);
        $this->db->from('person');
        
        $query = $this->db->get();
        
        if ($query->result_array() != null){
            return $query->result_array();
        }else{
            return null;
        }
    }
    
    public function getReputationByProjectid($project_id){
        $this->db->where('project_id',$project_id);
        $this->db->from('reputation');
        
        $query = $this->db->get();
        
        if ($query->result_array() != null){
            return $query->result_array();
        }else{
            return null;
        }
    }
    
    public function getMyNoteList($user_nm,$order){

        /*if($order=='NAME'){
            $this->db->order_by('SONG.song_name','asc');
        }else{//order==NEW
            $this->db->order_by('SONG.created_time','desc');
        }*/
        $this->db->where('user_nm',$user_nm);
        $this->db->where('delete_yn','N');
        $this->db->from('mynote');

        $query = $this->db->get();

        if ($query->result_array() != null){
            $result=array(
                'result'=>'good'
                ,'count'=>$query->num_rows()
                ,'list'=>$query->result_array()
                );
            return $result;
        }else{
            $result=array(
                'result'=>'bad'
                );
            return $result;
        }
    }
    
    public function getMyNote($user_nm,$mynote_nm){

        $this->db->where('user_nm',$user_nm);
        $this->db->where('mynote_nm',$mynote_nm);
        $this->db->where('delete_yn','N');
        $this->db->from('mynote');

        $query = $this->db->get();

        if ($query->result_array() != null){

            $result=array(
                'result'=>'good'
                ,'myNote'=>$query->row_array()
                ,'note'=>$this->_getNote($mynote_nm)
                );
            return $result;
        }else{
            $result=array(
                'result'=>'bad'
                );
            return $result;
        }
    }
    
    private function _getNote($mynote_nm){
        $this->db->where('mynote_nm',$mynote_nm);
        $this->db->where('delete_yn','N');
        $this->db->from('note');

        $query = $this->db->get();
        
        if ($query->result_array() != null){
            return $query->result_array();
        }else{
            return null;
        }
    }
    
    
    public function insertMyNote($param){
        
        if($param['user_nm']==''){
            //로그인 되어있지 않음
            $result=array(
                'result'=>'bad'
                ,'msg'=>'NEED_LOGIN'
                );
            return $result;
        }
        
        if($param['title']==''){
            //입력값이 제대로 들어오지 않음
            $result=array(
                'result'=>'bad'
                ,'msg'=>'NOT_ENOUGH_INPUT'
                );
            return $result;
        }
        
        $query_result=$this->db->insert('mynote',$param);
        $mynote_nm = $this->db->insert_id();
        if($query_result!=1){
            $result=array(
                'result'=>'bad'
                ,'msg'=>'INSERT_FAIL'
                );
            return $result;
        }
        
        $result=array(
                'result'=>'good',
                'mynote_nm'=>$mynote_nm,
                'msg'=>'INSERT_SUCCESS'
                );
        return $result;
    }
    public function modifyMyNote($mynote_nm, $user_nm, $param){
        if($user_nm==''){
            //로그인 되어있지 않음
            $result=array(
                'result'=>'bad'
                ,'msg'=>'NEED_LOGIN'
                );
            return $result;
        }
        if($mynote_nm==''||$param['title']==''){
            //입력값이 제대로 들어오지 않음
            $result=array(
                'result'=>'bad'
                ,'msg'=>'NOT_ENOUGH_INPUT'
                );
            return $result;
        }
        
        $this->db->where('user_nm',$user_nm);
        $this->db->where('mynote_nm',$mynote_nm);
        
        $query_result=$this->db->update('mynote',$param);
        if($query_result!=1){
            $result=array(
                'result'=>'bad'
                ,'msg'=>'UPDATE_FAIL'
                );
            return $result;
            // exit
        }
        
        $result=array(
                'result'=>'good'
                ,'msg'=>'UPDATE_SUCCESS'
                );
        return $result;
    }
    
    
    //-----------------------------------------------------------------
    public function delete_song($data){
        $song_id = $data['song_id'];
        $user_id = $data['user_id'];
        
        if($user_id==''){
            //로그인 되어있지 않음
            $result=array(
                'result'=>'bad'
                ,'msg'=>'NEED_LOGIN'
                );
            return $result;
        }
        
        if($song_id==''||$user_id==''){
            //입력값이 제대로 들어오지 않음
            $result=array(
                'result'=>'bad'
                ,'msg'=>'NOT_ENOUGH_INPUT'
                );
            return $result;
        }
        
        $this->db->where('user_id',$user_id);
        $this->db->where('song_id',$song_id);
        
        $update_data=array(
            'delete_yn'    =>  'Y'
            ,'created_time' =>  date('Y-m-d H:i:s') 
        );
        $query_result=$this->db->update('SONG',$update_data);
        if($query_result==1){
            //기존 태그 테이블 데이터 삭제
            $this->db->where('user_id',$user_id);
            $this->db->where('song_id',$song_id);
            $this->db->delete('SONG_TAG');
            $result=array(
                    'result'=>'good'
                    ,'msg'=>'UPDATE_SUCCESS'
                    );
            return $result;
        }else{
            $result=array(
                'result'=>'bad'
                ,'msg'=>'UPDATE_FAIL'
                );
            return $result;
            // exit
        }
    }
    
    
    public function song_list_by_tag($user_id,$tag,$order){

        $this->db->where('SONG_TAG.user_id',$user_id);
        $this->db->where('SONG_TAG.tag_name',$tag);
        
        if($order=='NAME'){
            $this->db->order_by('SONG.song_name','asc');
        }else{//order=NEW
            $this->db->order_by('SONG.created_time','desc');
        }

        $this->db->from('SONG_TAG');
        $this->db->join('SONG', 'SONG.song_id = SONG_TAG.song_id');
        
        $query = $this->db->get();

        if ($query->result_array() != null){
            $result=array(
                'result'=>'good'
                ,'msg'=>'SUCCESS'
                ,'count'=>$query->num_rows()
                ,'list'=>$query->result_array()
                );
            return $result;
        }else{
            $result=array(
                'result'=>'bad'
                ,'msg'=>'FAIL'
                );
            return $result;
        }
    }
    public function song_data($user_id,$song_id){

        $this->db->where('SONG.user_id',$user_id);
        $this->db->where('SONG.song_id',$song_id);

        $this->db->from('SONG');

        $query = $this->db->get();

        if ($query->result_array() != null){
            $result=array(
                'result'=>'good'
                ,'msg'=>'SUCCESS'
                ,'song'=>$query->result_array()[0]
                );
            return $result;
        }else{
            $result=array(
                'result'=>'bad'
                ,'msg'=>'FAIL'
                );
            return $result;
        }
    }
}