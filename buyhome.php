<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HandCrafted</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

:root{
    --orange:#ff7800;
    --black:#130f40;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
    --border:.2rem solid rgba(0,0,0,.1);
    --outline:.1rem solid rgba(0,0,0,.1);
    --outline-hover:.2rem solid var(--black);
  

}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

body{
    background:#eee;
}

section{
    padding:2rem 9%;
}

.heading{
    text-align: center;
    padding:2rem 0;
    padding-bottom: 3rem;
    font-size: 3.5rem;
    color:var(--black);
}

.heading span{
    background: var(--orange);
    color:#fff;
    display: inline-block;
    padding:.5rem 3rem;
    clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border:.2rem solid var(--black);
    color:var(--black);
    cursor: pointer;
    background: none;
}

.btn:hover{
    background: var(--orange);
    color:#fff;
    transition: .6s;
    font-size: 1.9rem;
}
.features .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.features .box-container .box{
    padding:3rem 2rem;
    background: #fff;
    outline: var(--outline);
    outline-offset: -1rem;
    text-align: center;
    box-shadow: var(--box-shadow);
}

.features .box-container .box:hover{
    outline: var(--outline-hover);
    outline-offset: 0rem;
}

.features .box-container .box img{
    margin:1rem 0;
    height: 15rem;
    
}

.features .box-container .box h3{
    font-size: 2.5rem;
    line-height: 1.8;
    color:var(--black);
}

.features .box-container .box .stars i{
    font-size: 1.7rem;
    color:var(--orange);
    padding:.5rem 0;
}

.features .box-container .box p{
    font-size: 1.5rem;
    line-height: 1.8;
    color:var(--light-color);
    padding:1rem 0;
}
.features .box-container .box .read-more-text{
    display: none;
}

.features .box-container .box .read-more-btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border:.2rem solid var(--black);
    color:var(--black);
    cursor: pointer;
    background: none;
}

.features .box-container .box .read-more-btn:hover{
    background: var(--orange);
    color:#fff;
     transition: .6s;
    font-size: 1.9rem; 
}

.features .box-container .box .read-more-text--show{
    display: inline;
}
.features .box-container .box .price{
    font-size: 2rem;
    color:var(--light-color);
    padding:.5rem 0;
}
</style>
</head>
<body>
<section class="features" id="features">

        <h1 class="heading">Home <span> decor</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="jute craft.jpg" alt="">
                <h3>Jute</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                <p>The best way to remodel a living room is to make it into a conversation pit.
                    <span class="read-more-text">urrounded with sofas, chairs and cushions enclosing the middle area will give a great view and a decent…show more content.
</span>
</p>
                    <span class="read-more-btn">Read more...</span>
                    <div class="price"> RS-200 </div>
            </div>
            <div class="box">
                <img src="home.jpg" alt="">
                <h3>Home decor</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Moving into a new home can be one of life’s great joys, but it can also be a time of uncertainty,
                    <span class="read-more-text"> especially when it comes to decorating. How do you make your space look its best while reflecting your personal sense of style.</span>
                </p>
                <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-560</div>

            </div>

            <div class="box">
                <img src="aa3627-500x500.jpg" alt="">
                <h3>Home decor</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Moving into a new home can be one of life’s great joys, but it can also be a time of uncertainty,
                    <span class="read-more-text"> especially when it comes to decorating. How do you make your space look its best while reflecting your personal sense of style.</span>
                </p>
                <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-560</div>

            </div>



            <div class="box">
                <img src="home 2.jpeg" alt="">
                <h3></h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p> Home decoration itself is a fun and interesting activity.
                    <span class="read-more-text"> It gives you an opportunity to show and practice your imagination and skills to the fullest.</span>
</p> 
                <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-150 </div>
            </div>

            <div class="box">
                <img src="images (7).jpeg" alt="">
                <h3>Home decor</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Moving into a new home can be one of life’s great joys, but it can also be a time of uncertainty,
                    <span class="read-more-text"> especially when it comes to decorating. How do you make your space look its best while reflecting your personal sense of style.</span>
                </p>
                <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-560</div>

            </div>

            <div class="box">
                <img src="home.jpeg" alt="">
                <h3>Home decor</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Moving into a new home can be one of life’s great joys, but it can also be a time of uncertainty,
                    <span class="read-more-text"> especially when it comes to decorating. How do you make your space look its best while reflecting your personal sense of style.</span>
                </p>
                <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-560</div>

            </div>

            <div class="box">
                <img src="images (6).jpeg" alt="">
                <h3>Home decor</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Moving into a new home can be one of life’s great joys, but it can also be a time of uncertainty,

                    <span class="read-more-text"> especially when it comes to decorating. How do you make your space look its best while reflecting your personal sense of style.</span>
                </p>
                <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-560</div>

            </div>
          
           







            

            <div class="box">
                <img src="Diy home.jpg" alt="">
                <h3></h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p> Home decoration itself is a fun and interesting activity.
                    <span class="read-more-text"> It gives you an opportunity to show and practice your imagination and skills to the fullest.</span>
</p> 
                <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-150 </div>
            </div>

        </div>

    </section>
    <script>
        // read more

        const parentHeading = document.querySelector('.features');

        parentHeading.addEventListener('click', event => {

            const current = event.target;

            const isReadMoreBtn = current.className.includes('read-more-btn');

            if (!isReadMoreBtn) return;

            const currentText = event.target.parentNode.querySelector('.read-more-text');

            currentText.classList.toggle('read-more-text--show');

            current.textcontent = current.textcontent.includes('Read More') ?

                "Read Less..." : "Read More...";

        })

    </script>

</body>
</html>