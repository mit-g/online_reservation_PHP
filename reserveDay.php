<?php
session_start();
if (isset($_SESSION['reserve'])) {
    unset($_SESSION['reserve']);
}
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
        <!--各ページスクリプト挿入場所-->
          <section>
              <h2>空室検索</h2>
              <h3>宿泊予定日入力</h3>
              <form action="reserveRoomList.php" method="post">
                  <table>
                      <tr>
                          <th></th>
                          <td><input type="date" name"reserveDay"
                            Value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>"required></td>
                      </tr>
                  </table>
              <input class"submit_a" type="submit" value="空室検索">
              </form>
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
    </body>
</html>