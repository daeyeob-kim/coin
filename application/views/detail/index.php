<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="/static/css/detail.css" type="text/css" rel="stylesheet" />
<style>
</style>

<div class="status_info">
    <p class="status">진행중</p>
    <div class="bar"></div>
    <p class="subject">시작 시간</p>
    <p class="time"><?=$project['start_time']?></p>
    <p class="subject">종료 시간</p>
    <p class="time"><?=$project['end_time']?></p>
    <p class="subject">모인 금액</p>
    <p class="value_now">123412345<span class="value_total"> /1234512345</span></p>
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
        <div class="cont">
            <p class="subject">대표 웹사이트 :</p><div class="value_div"><span onclick="document.location.href='<?=$project['website_url']?>';"><?=$project['website_url']?></span></div>
        </div>
        <?if($sns_list):?>
        <?foreach($sns_list as $sns):?>
        <div class="cont">
            <p class="subject"><?=$sns['sns_name']?> :</p><div class="value_div"><span onclick="document.location.href='<?=$sns['sns_url']?>';"><?=$sns['sns_url']?></span></div>
        </div>
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
        
        <div class="cont">
        <p class="subject" title="총공급 양입니다">총공급 :</p><div class="value_div"><span><?=$project['totalsupply']?></span></div>
        </div>
        <div class="cont">
        <p class="subject" title="구매가능한 양입니다">구매가능 :</p><div class="value_div"><span><?=$project['can_buy']?></span></div>
        </div>
        <div class="cont">
        <p class="subject" title="Soft Cap이란 바로~">Soft cap :</p><div class="value_div"><span><?=$project['softcap']?></span></div>
        </div>
        <div class="cont">
        <p class="subject" title="Hard Cap이란 바로~">Hard cap :</p><div class="value_div"><span><?=$project['hardcap']?></span></div>
        </div>
    </div>

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
