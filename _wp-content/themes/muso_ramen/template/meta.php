<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <title><?php if($title){ echo $title,"　|　"; } ?> Muso Ramen</title>
  <meta name="description" content="<?php $description; ?>" />

   <!-- クローラーを制御する場合 -->
  <!-- <meta name="robots" content="index,follow" /> -->

  <!-- URLを正規化する場合 -->
  <!-- <link rel="canonical" href="【正規化するURL】" /> -->

  <!-- 分割ページの場合 -->
  <!-- <link rel="prev" href="【1つ前のページのURL】" /> -->
  <!-- <link rel="next" href="【1つ後ろのページのURL】" /> -->

  <!-- 外部ファイルの読み込み -->
  <!-- <script src="【ファイルのURL】"></script> -->
  <link rel="stylesheet" href="/assets/css/style.css" />
  <!-- google_font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">


  <!-- アイコン -->
  <link rel="icon" href="favicon.ico" />
  <link rel="icon" href="favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="webclip.png" />


  <meta property="og:site_name" content="Muso Ramen" />
  <meta property="og:url" content="<?php $url; ?>" />
  <meta property="og:title" content=" Muso Ramen | <?php $title; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="【<?php $description; ?>" />
  <!-- <meta property="og:image" content="【サムネイル画像のURL】" /> -->
  <!-- <meta property="fb:app_id" content="【appID】" /> -->
  <meta property="og:locale" content="au_AU" />

</head>