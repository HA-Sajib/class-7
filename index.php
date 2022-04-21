<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <?php
    $questionSet = [

        [
    
            'question' => 'For preserving key sequences in array_chunk() you have to use..',
    
            'options' => [
    
                'First parameter will be false', 'Second parameter will be true
                ', 'Fourth parameter will be true
                ', 'Third parameter will be true'
    
            ]
    
        ],
    
    
    
        [
    
            'question' => 'implode() function used for…',
    
            'options' => [
    
                'String to array', 'Array to string', 'Make randomize array', 'None of these
                '
    
            ]
    
        ],
    
    
    
        [
    
            'question' => 'What will be the output of the following code?',
    
            'options' => [
    
                'Md.~Rafikul-Islam', 'Md.-Rafikul~Islam
                ', 'Md.~Rafikul~Islam ', 'Error'
    
            ]
    
            ],

        [
    
            'question' => 'Popping is an act of …',
    
            'options' => [
    
                'Adding values', 'Taking off values from stack
                ', 'Transferring values from stack', 'None of them'
    
            ]
    
            ],

        [
    
            'question' => 'Array_merge ( ) function merges…',
    
            'options' => [
    
                'Two arrays', 'Three arrays
                ', 'More than Three arrays', 'Merges array with a string'
    
            ]
    
            ],

        [
    
            'question' => 'Which function displays structured information about variables including its type and value?',
    
            'options' => [
    
                'asort()', 'ksort()
                ', 'sort()', 'var_dump()'
    
            ]
    
            ],

        [
    
            'question' => 'Which in-built function will add a value to the end of an array?',
    
            'options' => [
    
                'array_unshift()', 'into_array()
                ', 'inend_array()', 'array_push()'
    
            ]
    
            ],

        [
    
            'question' => 'Array_splice function is same as array_slice but it starts taking arguments from',
    
            'options' => [
    
                'First argument', 'Second argument
                ', 'Third argument', 'Fourth argument'
    
            ]
    
            ],

        [
    
            'question' => 'If you find the ‘Tamil Nadu’ from this given array by using in_array() what will be the output?',
    
            'options' => [
    
                'true', 
                'into_array()
                ', 
                'False', 
                'array_push()'
    
            ]
    
        ]
    
    ];
    ?>

    <div class="container">
        <?php  
        // shuffle($questionSet);
        foreach($questionSet as $index => $value){
            echo ++$index ." ".$value['question']."<br>";

            foreach($value['options'] as $key => $mcq){

        ?>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault <?php echo $index; ?>" id="flexRadioDefault1">
                <?php echo $mcq; ?>
            </div>
        <?php

            }
        }
        ?>
    </div>

    <!-- ========= Assignment - 2 ====== -->

    <?php
    $team_members = [
        [
        "team_img"      => "<img src='image-1.jpg' class='card-img-top'>",
        "name"          => "Jessica Doe", 
        "description"   => "CEO and Founder",
        "fb_icon"       => "<i class='fa-brands fa-facebook'></i>",
        "insta_icon"    => "<i class='fa-brands fa-instagram'></i>",
        "linkdin_icon"  => "<i class='fa-brands fa-linkedin'></i>" 
        ],
        [
        "team_img"      => "<img src='image-2.jpg' class='card-img-top'>",
        "name"          => "Jessica Doe", 
        "description"   => "CEO and Founder",
        "fb_icon"       => "<i class='fa-brands fa-facebook'></i>",
        "insta_icon"    => "<i class='fa-brands fa-instagram'></i>",
        "linkdin_icon"  => "<i class='fa-brands fa-linkedin'></i>" 
        ],
        [
        "team_img"      => "<img src='image-3.jpg' class='card-img-top'>",
        "name"          => "Chris Doe", 
        "description"   => "CEO and Founder",
        "fb_icon"       => "<i class='fa-brands fa-facebook'></i>",
        "insta_icon"    => "<i class='fa-brands fa-instagram'></i>",
        "linkdin_icon"  => "<i class='fa-brands fa-linkedin'></i>" 
        ]
    ];

    ?>

    <div class="container">
        <div class="row">
            <?php
            foreach($team_members as $key => $team_member){
            ?>
            <div class="col-md-4">
                <!-- <img src="image-1.jpg" class="card-img-top" alt="..."> -->
                <image <?php echo $team_member['team_img']; ?>
                <h3><?php echo $team_member['name']; ?></h3>
                <p><?php echo $team_member['description']; ?></p>
                <span><?php echo $team_member['fb_icon']; ?></span>
                <span><?php echo $team_member['insta_icon']; ?></span>
                <span><?php echo $team_member['linkdin_icon']; ?></span>
            </div>
            
            <?php
            }
            ?>
        </div>
    </div>
  </body>
</html>