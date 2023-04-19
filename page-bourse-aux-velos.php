<?php get_header(); ?>
<div id="content" class="flex flex-col w-full laptop:flex-row bg-white">
    <div id="primary" class="content-area w-full laptop:w-2/3 desktop:w-2/3 p-10">
        <div class="display-flex flex-row">
            <?php
            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);
            $apiUrl = "https://admin.kernavelo.org/api/index.php/";
            $attachmentUrl = "https://admin.kernavelo.org/document.php";
            $apiKey = "38o58RzHZeLujKSPn32m2ys5Cw1g3MNN";
            $listProduits = [];

            $produitParam = ["limit" => 10000, "sortfield" => "rowid"];
            $listProduitsResult = CallAPI("GET", $apiKey, $apiUrl."products", $produitParam);
            $listProduitsResult = json_decode($listProduitsResult, true);

            if (isset($listProduitsResult["error"]) && $listProduitsResult["error"]["code"] >= "300") {
            } else {
                foreach ($listProduitsResult as $produit) {
                    $listProduits[intval($produit["id"])] = html_entity_decode($produit["ref"], ENT_QUOTES);
                    $getImage = callAPI("GET", $apiKey, $apiUrl."documents?modulepart=product&id=".$produit["id"]);
                    $getImageResult = json_decode($getImage);

                    $title = $produit["label"];
                    $description = $produit["description"];
                    $price = intval($produit["price"]);
                    $img_hash = $getImageResult->ecmfiles_infos[0]->share;
                    // echo "<img src='".$attachmentUrl."?hashp=".$img_hash."' width='320'/>";
                    // echo $produit['price'];
                    // echo "<img src='https://admin.kernavelo.org/document.php?hashp=Lx0f6AI4jckR1bP8A4E8D2vG4ik1GUos' width='320'/>";
            ?>
                <div class="bike p-5 rounded-md bg-gray-100 display-flex w-fit">
                    <div class="text-xl pb-1 font-bold"><?php echo $title; ?></div>
                    <div class="text-md pb-1 text-gray-500"><?php echo $description; ?></div>
                    <div class="text-md pb-3"><?php echo $price; ?> €</div>
                    <div class="">
                        <img src="<?php echo $attachmentUrl."?hashp=".$img_hash; ?>" width="320"/>
                    </div>
                </div>
                <?php
                echo "<br/><br/>";
                }
                }

                function CallAPI($method, $apikey, $url, $data = false)
                {
                    $curl = curl_init();
                    $httpheader = ['DOLAPIKEY: '.$apikey];

                    switch ($method)
                    {
                        case "POST":
                        curl_setopt($curl, CURLOPT_POST, 1);
                        $httpheader[] = "Content-Type:application/json";

                        if ($data)
                            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

                        break;
                        case "PUT":

	                      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
                        $httpheader[] = "Content-Type:application/json";

                        if ($data)
                            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

                        break;
                        default:
                        if ($data)
                            $url = sprintf("%s?%s", $url, http_build_query($data));
                    }

                    // Optional Authentication:
	                  //    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	                  //    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	                  curl_setopt($curl, CURLOPT_HTTPHEADER, $httpheader);

                    $result = curl_exec($curl);

                    curl_close($curl);

                    return $result;
                }
                ?>
        </div><!-- liste vélos -->
    </div><!-- .content-area -->

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>

