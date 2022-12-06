<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dec30_2</title>
</head>
<body>
    <?php
        $data = [
            "data" => [
              [
                "id" => 6983839,
                "name" => "Tornado Dragon",
                "type" => "XYZ Monster",
                "desc" => "2 Level 4 monsters\nOnce per turn (Quick Effect): You can detach 1 material from this card, then target 1 Spell/Trap on the field; destroy it.",
                "atk" => 2100,
                "def" => 2000,
                "level" => 4,
                "race" => "Wyrm",
                "attribute" => "WIND",
                "card_sets" => [
                  [
                    "set_name" => "Battles of Legend: Relentless Revenge",
                    "set_code" => "BLRR-EN084",
                    "set_rarity" => "Secret Rare",
                    "set_rarity_code" => "(ScR)",
                    "set_price" => "4.08"
                  ],
                  [
                    "set_name" => "Duel Devastator",
                    "set_code" => "DUDE-EN019",
                    "set_rarity" => "Ultra Rare",
                    "set_rarity_code" => "(UR)",
                    "set_price" => "1.4"
                  ],
                  [
                    "set_name" => "Maximum Crisis",
                    "set_code" => "MACR-EN081",
                    "set_rarity" => "Secret Rare",
                    "set_rarity_code" => "(ScR)",
                    "set_price" => "4.32"
                  ]
                ],
                "card_images" => [
                  [
                    "id" => 6983839,
                    "image_url" => "https://images.ygoprodeck.com/images/cards/6983839.jpg",
                    "image_url_small" => "https://images.ygoprodeck.com/images/cards_small/6983839.jpg"
                  ]
                ],
                "card_prices" => [
                  [
                    "cardmarket_price" => "0.42",
                    "tcgplayer_price" => "0.48",
                    "ebay_price" => "2.99",
                    "amazon_price" => "0.77",
                    "coolstuffinc_price" => "0.99"
                  ]
                ]
              ]
            ]
        ];

        $cardImageUrl = $data["data"][0]["card_images"][0]["image_url"];
        // $cardImageUrl = $data[0]["data"][0]["card_images"][0]["image_url"];

        echo $cardImageUrl;


    ?>
</body>
</html>