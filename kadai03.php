<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>株式トレード記録</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="kadai04.js"></script>
     
</head>
<body>

<header style="max-width:1360px;">
  <nav style="font-size:30px;
              background-color: aqua;">
  <a class="navbar-brand" href="select.php">データ一覧</a>
  </nav>
</header>


    <h1 class ="main_title" 
    style="font-size:36px;
    position:absolute;
    top: 25%;
    left: 50%;
    translate;transfom3d(-50%,-50%,0);
    font-weight:bold;
    margin:auto;
    height:auto;">投資日記</h1>

    <div>
        <img src="img/12345.jpg" alt="投資日記メイン画像" 
        style ="width:1360px;
        height: 400px;
        margin: auto;
        ">
    </div>
    <p id="#second_title" 
        style="text-align: center;
               font-size: 20px;
               font-weight: bold;
               margin:20px 0 20px;">~将来に備えて資産を増やす為の振り返り~</p>

    <form method="post" action="insert.php" style="display:block;">
    <div style="width:800px;
                margin:auto;">
            <dl style="display:flex;
                    flex-wrap:wrap;
                    margin:0 0 30px 0;">
                <dt style="padding:8px;width:200px;margin: 0 16px 0 64px;text-align:left;">日付</dt>
                <dd ><input type="text" name="date" style="padding:6px;width:300px;margin:0 0 6px;"></dd>
                <dt style="padding:8px;width:200px;margin: 0 16px 0 64px;text-align:left;">銘柄</dt>
                <dd><input type="text" name="meigara" style="padding:6px;width:300px;margin:0 0 6px;"></dd>
                <dt style="padding:8px;width:200px;margin: 0 16px 0 64px;text-align:left;">購入時株価</dt>
                <dd><input type="text" name="purchaseprice" style="padding:6px;width:300px;margin:0 0 6px;"></dd>
                <dt style="padding:8px;width:200px;margin: 0 16px 0 64px;text-align:left;">売却時株価</dt>
                <dd><input type="text" name="saleprice" style="padding:6px;width:300px;margin:0 0 6px;"></dd>
                <dt style="padding:8px;width:200px;margin: 0 16px 0 64px;text-align:left;">株数</dt>
                <dd><input type="text" name="numberofstocks" style="padding:6px;width:300px;margin:0 0 6px;"></dd>
                <dt style="padding:8px;width:200px;margin: 0 16px 0 64px;text-align:left;">所感</dt>
                <dd><textarea name="syokan" cols="70" rows="25" style="margin:6px 0 0;font-size:8px;"></textarea></dd>
            </dl>
            <input id="btn" type="submit" value="保存" style="display:block;width:100px;height:50px;margin:auto;
             background-color: #ffd61a;">
        </form>
    </div>

    <script>
    const btn = document.querySelector("#btn");
    btn.onclick = function(e){
        console.log(e.pageX);
        alert("保存しました");
    }    
    
    

    </script>

    
</body>
</html>