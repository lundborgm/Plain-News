<?php

declare(strict_types=1);

// Array authors
$authors = [
    [
        'id' => 1,
        'name' => 'Winona Ryder',
    ],
    [
        'id' => 2,
        'name' => 'David Harbour',
    ],
    [
        'id' => 3,
        'name' => 'Natalia Dyer',
    ],
    [
        'id' => 4,
        'name' => 'Charlie Heaton',
    ],
    [
        'id' => 5,
        'name' => 'Finn Wolfhard',
    ],
];

// Array articles
$articles = [
    [
        'title' => 'Don\'t be foolish, take your doctor\'s advice: Smoke a fresh cigarette',
        'imgURL' => 'img/joycecigarette.jpg',
        'content' => "You act like you want me to be your friend and then you treat me like garbage. So, Jonathan, how was the pull-out?
        Let’s burn that lab to the ground. Just wait till we tell Will that Jennifer Hayes was crying at his funeral. You’re going to be home by 8,
        listening to the Talking Heads and reading Vonnegut or something. That sounds like a nice night. Mistakes have been made.
        Just wait till we tell Will that Jennifer Hayes was crying at his funeral. Friends don't lie. Um, I'm happy you're home.
        Why do we even need weapons anyway? We have her. You are such a nerd. No wonder you only hang out with boys.",
        'author' => $authors[0]['name'],
        'publishDate' => '2019-10-19',
        'likeCounter' => 41,
    ],
    [
        'title' => '11 reasons to love Eggo\'s',
        'imgURL' => 'img/eggo2.jpg',
        'content' => "You shouldn't like things because people tell you you're supposed to. If anyone asks where I am, I've left the country.
        Why do we even need weapons anyway? We have her. You’re going to be home by 8, listening to the Talking Heads and reading Vonnegut or something.
        That sounds like a nice night. Why are you keeping this curiosity door lock? Mistakes have been made. Friends don't lie. YOU BETTER RUN!
        She's our friend, and she's crazy! He’s a sensitive kid. Lonnie used to say he was queer. Called him a fag. Is he? He’s missing, is what he is!
        It’s about the shadow monster, isn’t it? You’re going to be home by 8, listening to the Talking Heads and reading Vonnegut or something.
        That sounds like a nice night. Don’t take it so personally, okay? I don’t like most people. He’s in the vast majority.
        Why are you keeping this curiosity door lock?",
        'author' => $authors[0]['name'],
        'publishDate' => '2019-10-18',
        'likeCounter' => 284,
    ],
    [
        'title' => 'The grand opening of Starcourt Mall',
        'imgURL' => 'img/starcourtmall.jpg',
        'content' => "You’re right. You are a freak…. Who would you rather be friends with: Bowie or Kenny Rogers? Bitchin' Yeah, I want a date with Bo Derek.
        We all want things. Mouth-breather. Just wait till we tell Will that Jennifer Hayes was crying at his funeral. Why’s he gotta kick the door? If we’re both going crazy,
        then we’ll go crazy together, right? You’re going to take out the demigorgon with a slingshot? Friends don't lie. No... no El, you're not the monster.
        You saved me. Do you understand? You saved me. You are such a nerd. No wonder you only hang out with boys. Yeah, I want a date with Bo Derek. We all want things.
        You’re going to take out the demigorgon with a slingshot? You act like you want me to be your friend and then you treat me like garbage. You're an idiot, Steve Harrington.
        You're beautiful, Nancy Wheeler. It’s about the shadow monster, isn’t it? Do you know anything about sensory deprivation tanks? Specifically how to build one?
        Hey kiddo, would you like a balloon? I need my paddles! You’re going to take out the demigorgon with a slingshot? Why do we even need weapons anyway? We have her.",
        'author' => $authors[1]['name'],
        'publishDate' => '2019-10-20',
        'likeCounter' => 59,
    ],
    [
        'title' => 'Eyes',
        'imgURL' => 'img/eyes.jpg',
        'content' => "You’re right. You are a freak…. Who would you rather be friends with: Bowie or Kenny Rogers? Bitchin' Yeah, I want a date with Bo Derek.
        We all want things. Mouth-breather. Just wait till we tell Will that Jennifer Hayes was crying at his funeral. Why’s he gotta kick the door? If we’re both going crazy,
        then we’ll go crazy together, right? You’re going to take out the demigorgon with a slingshot? Friends don't lie. No... no El, you're not the monster.
        You saved me. Do you understand? You saved me. You are such a nerd. No wonder you only hang out with boys. Yeah, I want a date with Bo Derek. We all want things.
        You’re going to take out the demigorgon with a slingshot? You act like you want me to be your friend and then you treat me like garbage. You're an idiot, Steve Harrington.
        You're beautiful, Nancy Wheeler. It’s about the shadow monster, isn’t it? Do you know anything about sensory deprivation tanks? Specifically how to build one?
        Hey kiddo, would you like a balloon? I need my paddles! You’re going to take out the demigorgon with a slingshot? Why do we even need weapons anyway? We have her.",
        'author' => $authors[1]['name'],
        'publishDate' => '2019-10-22',
        'likeCounter' => 995,
    ],
    [
        'title' => 'Hawkins Lab',
        'imgURL' => 'img/lab.jpg',
        'content' => "You act like you want me to be your friend and then you treat me like garbage. So, Jonathan, how was the pull-out?
        Let’s burn that lab to the ground. Just wait till we tell Will that Jennifer Hayes was crying at his funeral. You’re going to be home by 8,
        listening to the Talking Heads and reading Vonnegut or something. That sounds like a nice night. Mistakes have been made.
        Just wait till we tell Will that Jennifer Hayes was crying at his funeral. Friends don't lie. Um, I'm happy you're home.
        Why do we even need weapons anyway? We have her. You are such a nerd. No wonder you only hang out with boys.",
        'author' => $authors[2]['name'],
        'publishDate' => '2019-10-21',
        'likeCounter' => 369,
    ],
    [
        'title' => 'How to deal with depression and sadness',
        'imgURL' => 'img/billy2.jpg',
        'content' => "You’re right. You are a freak…. Who would you rather be friends with: Bowie or Kenny Rogers? Bitchin' Yeah, I want a date with Bo Derek.
        We all want things. Mouth-breather. Just wait till we tell Will that Jennifer Hayes was crying at his funeral. Why’s he gotta kick the door? If we’re both going crazy,
        then we’ll go crazy together, right? You’re going to take out the demigorgon with a slingshot? Friends don't lie. No... no El, you're not the monster.
        You saved me. Do you understand? You saved me. You are such a nerd. No wonder you only hang out with boys. Yeah, I want a date with Bo Derek. We all want things.
        You’re going to take out the demigorgon with a slingshot? You act like you want me to be your friend and then you treat me like garbage. You're an idiot, Steve Harrington.
        You're beautiful, Nancy Wheeler. It’s about the shadow monster, isn’t it? Do you know anything about sensory deprivation tanks? Specifically how to build one?
        Hey kiddo, would you like a balloon? I need my paddles! You’re going to take out the demigorgon with a slingshot? Why do we even need weapons anyway? We have her.",
        'author' => $authors[2]['name'],
        'publishDate' => '2019-10-17',
        'likeCounter' => 37,
    ],
    [
        'title' => 'Eleven about her new job: \'I love working at 7-Eleven, it makes me feel special\'',
        'imgURL' => 'img/7-Eleven.jpg',
        'content' => "You shouldn't like things because people tell you you're supposed to. If anyone asks where I am, I've left the country.
        Why do we even need weapons anyway? We have her. You’re going to be home by 8, listening to the Talking Heads and reading Vonnegut or something.
        That sounds like a nice night. Why are you keeping this curiosity door lock? Mistakes have been made. Friends don't lie. YOU BETTER RUN!
        She's our friend, and she's crazy! He’s a sensitive kid. Lonnie used to say he was queer. Called him a fag. Is he? He’s missing, is what he is!
        It’s about the shadow monster, isn’t it? You’re going to be home by 8, listening to the Talking Heads and reading Vonnegut or something.
        That sounds like a nice night. Don’t take it so personally, okay? I don’t like most people. He’s in the vast majority.
        Why are you keeping this curiosity door lock?",
        'author' => $authors[3]['name'],
        'publishDate' => '2019-10-23',
        'likeCounter' => 98,
    ],
    [
        'title' => 'Mike lost his bike: \'This is the worst thing that could ever happen to me\'',
        'imgURL' => 'img/mike.jpg',
        'content' => "You act like you want me to be your friend and then you treat me like garbage. So, Jonathan, how was the pull-out?
        Let’s burn that lab to the ground. Just wait till we tell Will that Jennifer Hayes was crying at his funeral. You’re going to be home by 8,
        listening to the Talking Heads and reading Vonnegut or something. That sounds like a nice night. Mistakes have been made.
        Just wait till we tell Will that Jennifer Hayes was crying at his funeral. Friends don't lie. Um, I'm happy you're home.
        Why do we even need weapons anyway? We have her. You are such a nerd. No wonder you only hang out with boys.",
        'author' => $authors[3]['name'],
        'publishDate' => '2019-10-24',
        'likeCounter' => 100,
    ],
    [
        'title' => 'Ice Cream',
        'imgURL' => 'img/icecream.jpg',
        'content' => "You act like you want me to be your friend and then you treat me like garbage. So, Jonathan, how was the pull-out?
        Let’s burn that lab to the ground. Just wait till we tell Will that Jennifer Hayes was crying at his funeral. You’re going to be home by 8,
        listening to the Talking Heads and reading Vonnegut or something. That sounds like a nice night. Mistakes have been made.
        Just wait till we tell Will that Jennifer Hayes was crying at his funeral. Friends don't lie. Um, I'm happy you're home.
        Why do we even need weapons anyway? We have her. You are such a nerd. No wonder you only hang out with boys.",
        'author' => $authors[4]['name'],
        'publishDate' => '2019-10-16',
        'likeCounter' => 56,
    ],
    [
        'title' => 'A storm is coming',
        'imgURL' => 'img/rainy.jpg',
        'content' => "You’re right. You are a freak…. Who would you rather be friends with: Bowie or Kenny Rogers? Bitchin' Yeah, I want a date with Bo Derek.
        We all want things. Mouth-breather. Just wait till we tell Will that Jennifer Hayes was crying at his funeral. Why’s he gotta kick the door? If we’re both going crazy,
        then we’ll go crazy together, right? You’re going to take out the demigorgon with a slingshot? Friends don't lie. No... no El, you're not the monster.
        You saved me. Do you understand? You saved me. You are such a nerd. No wonder you only hang out with boys. Yeah, I want a date with Bo Derek. We all want things.
        You’re going to take out the demigorgon with a slingshot? You act like you want me to be your friend and then you treat me like garbage. You're an idiot, Steve Harrington.
        You're beautiful, Nancy Wheeler. It’s about the shadow monster, isn’t it? Do you know anything about sensory deprivation tanks? Specifically how to build one?
        Hey kiddo, would you like a balloon? I need my paddles! You’re going to take out the demigorgon with a slingshot? Why do we even need weapons anyway? We have her.",
        'author' => $authors[4]['name'],
        'publishDate' => '2019-10-25',
        'likeCounter' => 72,
    ],
];
