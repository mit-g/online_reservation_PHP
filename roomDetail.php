<?php
    if(empty($_GET["rno"]) == true){
     $rno = '';
    }else{
     $rno = htmlspecialchars($_GET["rno"]);
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
    <?php
        $sql = "SELECT
        room_name,information,main_image,image1,image2,image3,type_name,dayfee,amenity FROM room,room_type WHERE room.type_id = room_type.type_id AND room.room_no = {$rno}";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
    <main id="main">
      <article>
        <section>
        <h2>客室詳細</h2>
            <h3>『<?php echo $row['room_name'];?>』</h3>
        <p>
            <?php echo $row['information'];?>
        </p>
        <table>
            <tr>
                <td><img class="middle" 
                         src="./images/<?php echo $row['main_image'];?>"></td>
                <td><img class="middle"
                         src="./images/<?php echo $row['image1'];?>"></td>
            </tr>
             <tr>
                <td><img class="middle"
                         src="./images/<?php echo $row['image2'];?>"></td>
                <td><img class="middle"
                         src="./images/<?php echo $row['image3'];?>"></td>
            </tr>
        </table>
        <br>
        <table>
            <th>客室名称</th>
            <th>1泊料金<br>(部屋単位)</th>
            <th>アメニティ</th>
            <tr>
                <td><?php echo $row['type_name'];?></td>
                <td class="number">&yen;
                    <?php echo number_format($row['dayfee']);?></td>
                <td><?php echo $row[''];?></td>
        </tr>
        </table>
            
        <h3>
            ご家族でもお二人でも
        </h3>
        <p>
            小さなお子様やご高齢者がおられるお客様でも<br>
            心おきなく楽しんでいただける環境づくりをするように配慮しております
        </p>
        <h3>
            風光明媚な土地に囲まれた立地
        </h3>
        <p>
            周囲は雄大な山々に囲われた癒し空間<br>
            市街地・温泉街へのアクセスもよく、長期滞在でも飽きさせません
        </p>
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
    <!-- フッター：開始 -->
    <footer id="footer">
        <p>Copyright c 2019 Git Hotel All Rights Reserved.</p>
    </footer>
    <!-- フッター：終了 -->
    <?php
    mysqli_free_result($result);
    mysqli_close($link);
    ?>
    </body>
</html>