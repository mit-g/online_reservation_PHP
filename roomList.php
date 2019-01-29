<?php
 if(empty($_GET["tid"]) == true){
     $tid = '';
 }else{
     $tid = htmlspecialchars($_GET["tid"]);
 }
 require_once('./dbConfig.php');
 $link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
 if($link == null){
     die("接続失敗:".mysqli_connect_error());
 }
 mysqli_set_charset($link,"utf8");
 ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link href="./css/style.css" rel="stylesheet" type="text/css">
        <title>Git Hotel</title>
    </head>
    <body>
    <!-- ヘッダー開始 -->
    <header id="header">
    <div id="pr">
        <p>安らぎと華やかさが融合した最高級の施設と温かいおもてなしでお客さまをお迎えいたします。</p>
    </div>
    <h1><a href="./index.php"><img src="./images/logo.jpg" alt=""></a></h1>
    <div id="contact">
        <h2>ご予約・お問い合わせ</h2>
        <span class="tel"><p>☎0120-000-000</p></span>
    </div>
    </header>
    <!-- ヘッダー終了 -->
    <!-- メニュー開始 -->
    <?php include("./topmenu.php");?>
    <!-- メニュー終了 -->
    <!-- コンテンツ：開始 -->
    <div id="contents">
        <!-- メイン：開始 -->
    <main id="main">
      <article>
        <section>
        <h2><img class="small" src="./images/new.png"><br>更新情報</h2>
        <dl class="information">
            <dt>2019-01-20</dt>
            <dd>
                サイトをオープンしました。
            </dd>
        </dl>
        </section>
        <section>
        <h2>客室紹介</h2>
        <?php
            if(empty($tid) == true){
            $sql = "SELECT room_name,type_name,dayfee,main_image,room_no
            FROM room,room_type
            WHERE room.type_id = room_type.type_id";
            }else{
            $sql = "SELECT room_name,type_name,dayfee,main_image,room_no
            FROM room,room_type
            WHERE room.type_id = room_type.type_id
            AND room.type_id = {$tid}";
            }
            $result = mysqli_query($link,$sql);
            $cnt = mysqli_num_rows($result);
            if($cnt == 0){
                echo "<b>ご指定のお部屋は只今準備ができておりません。</b>";
            }else{
            ?>
        <h3>当ホテル自慢のお部屋をご紹介</h3>
        <p>
            ご希望に沿った形でお選び頂けるよう、様々なタイプのお部屋を用意しております。
        </p>
            
        <table>
        <th>客室名称</th>
        <th>1泊料金<br>(部屋単位)</th>
        <th　colspan="2">客室イメージ</th>
        <?php
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            echo "<tr>";
            echo "<td>{$row['room_name']}</td>";
            echo "<td>{$row['type_name']}</td>";
            echo "<td class='number'>&yen; {$row['dayfee']}</td>";
            echo "<td><img class='small' src='./images/{$row['main_image']}'></td>";
            echo "<td><a href='./roomDetail.php?0={$row['room_no']}'>詳細</a></td>";
            echo "</tr>";
            }
        }
        ?>
        </table>
        </section>
      </article>
    </main>
    <!-- メイン：終了 -->
    <!-- サイド：開始 -->
    <aside id="side">
      <section>
        <h2>ご予約</h2>
        <ul>
            <li><a href="./reserveDay.php">宿泊日入力</a></li>
        </ul>
      </section>
      <section>
        <h2>客室紹介</h2>
        <?php include("./sideList.php");?>
      </section>
    </aside>
        <!-- サイド：終了 -->
        <!-- ページトップ：開始 -->
        <div id="pageTop">
            <a href="#top">ページトップへ</a>
        </div>
        <!-- ページトップ：終了 -->
    </div>
    <!-- コンテンツ：終了 -->
    <?php
    mysqli_free_result($result);
    mysqli_close($link);
    ?>
    <!-- フッター：開始 -->
    <footer id="footer">
        <p>Copyright c 2019 Git Hotel All Rights Reserved.</p>
    </footer>
    <!-- フッター：終了 -->
    </body>
</html>