
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="tsuyoshi.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 
    <title>introduce myself</title>
    </head>
    <body>
    
            <header>
                <div class="container">
                <div class="header-right">
                  <a href="https://www.miraidenshi-tech.jp/library/21763/" class="login">Directory</a>
                  <a href="https://www.miraidenshi-tech.jp/" class="company">About</a>
                    </div>
                <div class="header-left">
                   <p>MIRAIDENSHI</p> 
                </div>    
             </div>
            </header>
            <div class="top-wrapper">
             <img src="tsuyoshi1.jpg" name="tsuyoshi" width=1100 height=800> 

                <script type="text/javascript">
                 img = new Array("tsuyoshi1.jpg","tsuyoshi2.jpg","tsuyoshi3.jpg","tsuyoshi4.jpg","tsuyoshi5.jpg","tsuyoshi6.jpg"); //*1
                   count = -1; //*2
                   imgTimer();

                   function imgTimer() {
	                 //画像番号
	                 count++; //*3
	                 //画像の枚数確認
	                if (count == img.length) count = 0; //*4
	                //画像出力
	                document.tsuyoshi.src = img[count]; //*5
	                //次のタイマー呼びだし
	               setTimeout("imgTimer()",4000); //*6
                  }
                  </script>
            

            </div>
            <div class="about">
                <div class="about-logo">About</div>
                <div class="about-content">
                <div class="about-photo">
                <img class="about-img" src="takeuchi.jpg">
                <a href="https://twitter.com/TsuyoshiT514?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @TsuyoshiT514</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="about-text">
                
                <p>生年月日：　1998年 5月14日</p>
                <p>出身校：  立命館大学 国際関係学部(2021年卒)</p>
                <p>趣味：　バスケットボール・散歩・読書</p>
                <p>スキル：　持久力・プログラミング・営業</p>
            </div>
            </div>
        </div>
<div class="history">
    <div class="history-logo">
        <h1>History</h1>
    </div>
   <div class="history-text">
       <p>1998年 5月14日 大阪摂津市で誕生</p>
       <p>2014年 大阪府立山田高校入学</p>
       <p>2017年 立命館大学 国際関係学部入学</p>
       <p>2018年 未来電子テクノロジー株式会社入社</p>
   </div> 

<div class="contact-logo">Contact</div>
<form action="contact.php" method="post">
  
    <div class="item">
      <label class="label">お名前</label>
      <input class="inputs" type="text" name="name">
    </div>
    
    <div class="item">
      <label class="label">会社名</label>
      <input class="inputs" type="text" name="company">
    </div>
    <div class="item">
        <label class="label">備考欄</label>
        <textarea class="inputs" name="text"></textarea>
      </div>
  
    <div class="btn-area">
        <input type="submit" value="送信する"><input type="reset" value="リセット">
      </div>
    </form>
  
    </body>
    </html>