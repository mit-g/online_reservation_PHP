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
    <!-- アイキャッチ：開始 -->
    <div id="icatch">
        <img src="./images/icatch.jpg" alt="">
    </div>
    <!-- アイキャッチ：終了 -->
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
        <h2><img class="small" src="./images/about.png"><br>Git Hotelについて</h2>
        <h3>最高のおもてなし</h3>
        <p>
            スタッフ一同心掛けているのは、最上のくつろぎを感じていただくこと
        </p>
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
    </body>
</html>