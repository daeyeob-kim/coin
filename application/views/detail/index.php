<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
.info{
    width:100%;
}
.info .coin_img {
    width:160px;
    height:160px;
    margin-top:60px;
    margin-left:60px;
    float:left;
}
.info .coin_title{
    height: 36px;
    width: calc( 100% - 260px);
    font-family: NotoSansCJKkr;
    font-size: 24px;
    font-weight: 900;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #444444;
    margin-top:60px;
    margin-left:40px;
    display:inline-block;
}
.info .coin_summary {
    height: 24px;
    width: calc( 100% - 260px);
    font-family: NotoSansCJKkr;
    font-size: 16px;
    font-weight: normal;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
    margin-top:12px;
    margin-left:40px;
    display: inline-block;
}
.info .tags{
    width: calc( 100% - 260px);
    display: inline-block;
    margin-top:24px;
    margin-left:40px;
}
.info .tags .rect {
    width: 69px;
    height: 40px;
    padding: 12px;
    border-radius: 50px;
    background-color: #ffffff;
    box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1);
}
.info .whitepaper {
    width: calc(100% - 260px);
    height: 51px;
    border-radius: 50px;
    background-color: #ffffff;
    border: solid 1px #3e9df3;
    margin-top:24px;
    margin-left:260px;
}

.info .whitepaper p {
  height: 24px;
  font-family: NotoSansCJKkr;
  font-size: 16px;
  text-align: center;
  padding: 14px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #3e9df3;
}



.basic_info{
    margin-top:48px;
    margin-left:60px;
    max-width:760px;
}
.basic_info .title {
    font-family: NotoSansCJKkr;
    font-size: 24px;
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
    margin-bottom:12px;
}
.basic_info .line{
    height: 2px;
    border-radius: 2px;
    background-color: #efefef;
}
.basic_info .contents{
    margin-top:24px;
}




.basic_value{
    margin-top:48px;
}
.basic_value .subject{
    width:200px;
    height: 24px;
    font-family: NotoSansCJKkr;
    font-size: 16px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
    display:inline-block;
    margin-left:60px;
    margin-top:12px;
}
.basic_value .value_div{
    width: calc(100% - 260px);
    display: inline-block;
}


.investment_info{
    margin-top:48px;
    margin-left:60px;
    max-width:760px;
}
.investment_info .title {
    font-family: NotoSansCJKkr;
    font-size: 24px;
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
    margin-bottom:12px;
}
.investment_info .line{
    height: 2px;
    border-radius: 2px;
    background-color: #efefef;
}

.investment_info .content{
    margin-top:24px;
}


.investment_value{
    margin-top:24px;
}
.investment_value .subject{
    width:200px;
    height: 24px;
    font-family: NotoSansCJKkr;
    font-size: 16px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
    display:inline-block;
    margin-left:60px;
    margin-top:12px;
}


.status_info {
    width: 280px;
    border-radius: 8px;
    background-color: #ffffff;
    box-shadow: 0 4px 16px 0 rgba(0, 0, 0, 0.1);
    float: right;
    margin-top:60px;
    margin-right:60px;
    padding:24px;
}
.icolink{
    width: 100%;
    height: 48px;
    border-radius: 23px;
    background-color: #3e9df3;
    border: solid 1px #3e9df3;
    
}
.icolink p{
    text-align: center;
    padding: 14px;
    height: 24px;
    font-family: NotoSansCJKkr;
    font-size: 16px;
    font-weight: normal;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #ffffff;
}
.status_info .status{
    font-family: NotoSansCJKkr;
    font-size: 24px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
}
.status_info .bar{
    height: 2px;
    border-radius: 2px;
    background-color: #efefef;
    margin-top:24px;
    margin-bottom:24px;
}
.status_info .subject{
    font-family: NotoSansCJKkr;
    font-size: 16px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
}
.status_info .time{
    font-family: NotoSansCJKkr;
    font-size: 24px;
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #444444;
    margin-bottom:24px;
}
.status_info .value_now{
    font-family: NotoSansCJKkr;
    font-size: 24px;
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #fc6488;
    margin-bottom:24px;
}
.status_info .value_total{
  font-family: NotoSansCJKkr;
  font-size: 16px;
  font-weight: 300;
  font-style: normal;
  font-stretch: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: left;
  color: #808080;
}

.team_info{
    margin-top:48px;
    margin-left:60px;
    max-width:760px;
}
.team_info .title {
    font-family: NotoSansCJKkr;
    font-size: 24px;
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
    margin-bottom:12px;
}
.team_info .line{
    height: 2px;
    border-radius: 2px;
    background-color: #efefef;
}





.news_info{
    margin-top:48px;
    margin-left:60px;
    max-width:760px;
}
.news_info .title {
    font-family: NotoSansCJKkr;
    font-size: 24px;
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
    margin-bottom:12px;
}
.news_info .line{
    height: 2px;
    border-radius: 2px;
    background-color: #efefef;
}

.left_side{
    width: calc(100% - 433px);
    padding-right: 40px;
}
</style>

<div class="status_info">
    <p class="status">진행중</p>
    <div class="bar"></div>
    <p class="subject">시작 시간</p>
    <p class="time"><?=$project['start_time']?></p>
    <p class="subject">종료 시간</p>
    <p class="time"><?=$project['end_time']?></p>
    <p class="subject">모인 금액</p>
    <p class="value_now">123412345<span class="value_total">/1234512345</span></p>
    <div class="icolink"><p>ICO 참여하기</p></div>
</div>
<div class="left_side">
    <div class="info">
        <img class="coin_img" src="<?=$project['image_url']?>">
        <p class="coin_title"><?=$project['token_name_'.$lang]?>(<?=$project['symbol']?>)</p>
        <br>
        <p class="coin_summary"><?=$project['project_summary_'.$lang]?></p>
        <br>
        <div class="tags">
        <?if($project['relatedindustries_'.$lang]):?>
        <?foreach(explode(',', $project['relatedindustries_'.$lang]) as $value): ?>
            <span class="rect"><?=trim($value)?></span>
        <?endforeach;?>
        <?endif;?>
        </div>
        <br>
        <div class="whitepaper" onclick="document.location.href='<?=$project['whitepaper_url']?>'"><p>백서(White Paper)보기</p></div>
    </div>
    <div class="basic_info">
        <p class="title">기본정보</p>
        <div class="line"></div>
        <div class="contents">
        <?=$project['contents_'.$lang]?>
        </div>
    </div>
    <div class="basic_value">
        <p class="subject">대표 웹사이트 :</p><div class="value_div"><span onclick="document.location.href='<?=$project['website_url']?>';"><?=$project['website_url']?></span></div>
        <br>
        <?if($sns_list):?>
        <?foreach($sns_list as $sns):?>
        <p class="subject"><?=$sns['sns_name']?> :</p><span onclick="document.location.href='<?=$sns['sns_url']?>';"><?=$sns['sns_url']?></span><br>
        <?endforeach;?>
        <?endif;?>
        
    </div>
    <div class="investment_info">
        <p class="title">투자정보</p>
        <div class="line"></div>
        <div class="content">
        <?=$project['contents_'.$lang]?>
        </div>
    </div>
    
    <div class="investment_value">
        <p class="subject">총공급 :</p><span><?=$project['totalsupply']?></span>
        <br>
        <p class="subject">구매가능 :</p><span><?=$project['can_buy']?></span>
        <br>
        <p class="subject">Soft cap :</p><span><?=$project['softcap']?></span>
        <br>
        <p class="subject">Hard cap :</p><span><?=$project['hardcap']?></span>
        <br>
    </div>
    
    <style>
    .team_info .teams{
        margin-top:24px;
    }
    .team_info .teams .person{
        width:49%;
        height: 60px;
        margin-bottom:24px;
        display:inline-block;
    }
    .team_info .team_image{
        width: 60px;
        height: 60px;
        background-color: #efefef;
        float:left;
    }
    .team_info .name{
        font-family: NotoSansCJKkr;
        font-size: 16px;
        font-weight: bold;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: left;
        color: #4a4a4a;
        margin-left:24px;
        margin-bottom:8px;
        display: inline-block;
    }
    .team_info .position{
        font-family: NotoSansCJKkr;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: left;
        margin-left:24px;
        color: #4a4a4a;
        display: inline-block;
    }
    
    .more{
      font-family: NotoSansCJKkr;
      font-size: 16px;
      font-weight: normal;
      font-style: normal;
      font-stretch: normal;
      line-height: normal;
      letter-spacing: normal;
      text-align: right;
      color: #4a4a4a;
    }
    
    
    </style>
    <div class="team_info">
        
        <p class="title">개발팀</p>
        <div class="line"></div>
        <div class="teams">
        <?if($person_list):?>
        <?foreach($person_list as $person):?>
            <div class="person">
                <img class="team_image" src="<?=$person['picture_link']?>">
                <p class="name"><?=$person['name_'.$lang]?> <a href="<?=$person['sns_link']?>"><?=$person['sns_type']?></a></p>
                <br>
                <p class="position"><?=$person['position']?></p>
            </div>
        <?endforeach;?>
        <?endif;?>
        </div>
        <p class="more">개발팀 더 보기 ></p>
        
    </div>
    
    
    <style>
    .news_info .news{
        margin-top:24px;
    }
    .news_info .news .article{
        width:49%;
        height: 120px;
        margin-bottom:24px;
        display:inline-block;
        border-radius: 8px;
        background-color: #ffffff;
        box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.1);
    }
    .news_info .article_image{
        width: 120px;
        height: 120px;
        background-color: #efefef;
        float:left;
    }
    .news_info .article_title{
        font-family: NotoSansCJKkr;
        font-size: 16px;
        font-weight: bold;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: left;
        color: #4a4a4a;
        margin-left:24px;
        margin-top:8px;
        margin-bottom:8px;
        display: inline-block;
        max-width:216px;
        max-height:48px;
        overflow: hidden;
    }
    .news_info .article_contents{
        font-family: NotoSansCJKkr;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: left;
        margin-left:24px;
        color: #4a4a4a;
        display: inline-block;
        max-width:216px;
        max-height:40px;
        overflow: hidden;
    }
    
    </style>
    <div class="news_info">
        <p class="title">뉴스</p>
        <div class="line"></div>
        <div class="news">
        <?if($reputation_list):?>
        <?foreach($reputation_list as $reputation):?>
            <div class="article" onclick="document.location.href='<?=$reputation['reputation_link']?>'">
                <img class="article_image" src="<?=$reputation['picture_link']?>">
                <p class="article_title"><?=$reputation['title']?></p>
                <br>
                <p class="article_contents"><?=$reputation['contents']?></p>
            </div>
        <?endforeach;?>
        <?endif;?>
        </div>
        <p class="more">더 많은 뉴스 보기 ></p>
        
    </div>
</div>


<?if($project['whitepaper_url_'.$lang]):?>
    <a href="<?=$project['whitepaper_url_'.$lang]?>">번역백서보기</a>
<?endif;?>
