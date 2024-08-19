<?php
$data = [
  [
    "position" => 1,
    "url" => "https =>//www.nike.com/",
    "title" => "Nike. Just Do It. Nike.com",
    "description" => "Nike delivers innovative products, experiences and services to inspire athletes."
  ],
  [
    "position" => 2,
    "url" => "https =>//www.instagram.com/nike/?hl=de",
    "title" => "Nike (@nike) • Instagram photos and videos",
    "description" => "255m Followers, 147 Following, 1019 Posts - See Instagram photos and videos from Nike (@nike)"
  ],
  [
    "position" => 3,
    "url" => "https =>//twitter.com/nike",
    "title" => "Nike - Twitter",
    "description" => "Welcome to Nike FC. We're not a club. We're a community. If you love the game of football, you're a part of Nike FC. Let's change the game, ..."
  ],
  [
    "position" => 4,
    "url" => "https =>//en.wikipedia.org/wiki/Nike,_Inc.",
    "title" => "Nike, Inc. - Wikipedia",
    "description" => "Nike, Inc is an American multinational corporation that is engaged in the design, development, manufacturing, and worldwide marketing and sales of footwear, ..."
  ],
  [
    "position" => 5,
    "url" => "https =>//www.youtube.com/user/nike",
    "title" => "Nike - YouTube",
    "description" => "We will continue to stand up for equality and work to break down barriers for athletes* all over the world. We will do and invest more to uphold ..."
  ],
  [
    "position" => 6,
    "url" => "https =>//www.footlocker.com/category/brands/nike.html",
    "title" => "Nike Sneakers, Apparel, and Accessories - Foot Locker",
    "description" => "Shop the latest selection of Nike at Foot Locker. Find the hottest sneaker drops from brands like Jordan, Nike, Under Armour, ..."
  ],
  [
    "position" => 7,
    "url" => "https =>//stockx.com/nike",
    "title" => "Buy Nike Shoes & New Sneakers - StockX",
    "description" => "Buy and sell Nike shoes at the best price on StockX, the live marketplace for StockX Verified Nike sneakers and other popular new releases."
  ],
  [
    "position" => 8,
    "url" => "https =>//play.google.com/store/apps/details?id=com.nike.omega&hl=en_US&gl=US",
    "title" => "Nike => Shoes, Apparel & Stories - Apps on Google Play",
    "description" => "Shop all perfect gifts for sport and style this Nike holiday season. Nike Member Exclusive products, end of year deals, and more - shop and ..."
  ],
  [
    "position" => 9,
    "url" => "https =>//de-de.facebook.com/nike/",
    "title" => "Nike - Home | Facebook",
    "description" => "Nike, Beaverton, OR. 36093752 likes · 306235 talking about this · 7259 were here. Just Do It."
  ],
  [
    "position" => 10,
    "url" => "https =>//www.linkedin.com/company/nike",
    "title" => "Nike - LinkedIn",
    "description" => "NIKE, Inc., named for the Greek goddess of victory, is the world's leading designer, marketer, and distributor of authentic athletic footwear, apparel, ..."
  ]
];
$itemsperpage = 5;
$totalitems = count($data); //otomatis hitung isi $data
$totalpages = ceil($totalitems / $itemsperpage); //ngehitung semua laman
$currentpage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$startindex = ($currentpage - 1) * $itemsperpage;
$itemstodisplay = array_slice($data, $startindex, $itemsperpage);
?>

<!DOCTYPE html>
<html>
<head>
  <title>i luv hardcore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    table {
      width: 100%;
      border-collape: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    th {
      background-color: #213752;
      color: #ffffff;
    }
    tr {
      background-color: #f2f2f2;
    }
    a {
      text-decoration: none;
      color: #007bff;
      text-decoration: underline;
      font-weight: bold;
    }
    .scanav {
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

  <table>
    <tr>
      <th>Numero</th>
      <th>Links auf</th>
      <th>Kompanie</th>
      <th>Yapper</th>
    </tr>

    <?php
    //still doesnt undertsnado this like, why cantwe just use $data instead $item, i dont want to use foreach :c
      foreach ($itemstodisplay as $item) { //needed so this wont warning shi or something
        echo "<tr>";
        echo "<td>{$item['position']}</td>";
        echo "<td><a href='{$item['url']}' target='_blank'>{$item['title']}</a></td>";
        echo "<td>{$item['title']}</td>";
        echo "<td>{$item['description']}</td>";
        echo "</tr>";
      }
    ?>
  </table>
  <div class= "scanav">
    <?php 
    for ($i = 1; $i <=$totalpages; $i++) {
      if ($i == $currentpage) {
        echo "<strong>$i</strong>";
      } else {
        echo "<a href='?page=$i'> $i </a>";  
      }
    }
    ?>
    </div>

</body>
</html>
