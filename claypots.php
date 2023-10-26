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

        <h1 class="heading">Clay <span> pots</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="depositphotos_2257855-stock-photo-handmade-clay-pots-in-a.jpg" alt="">
                <h3>Earthen pots</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                <p>Pottery is the process and the products of forming vessels and other objects with clay 
                    <span class="read-more-text">


                    and other ceramic materials, which are fired at high temperatures to give them a hard and durable form. 
</span>
</p>
                    <span class="read-more-btn">Read more...</span>
                    <div class="price"> RS-649</div>
            </div>

            <div class="box">
                <img src="clay pots 2.jpg" alt="">
                <h3>Terecotta earthen pots</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>"Terra Cotta" redirects here. For the architectural usage, see Architectural terracotta. 
                    
                <span class="read-more-text"> In archaeology and art history, "terracotta" is often used to describe objects such as figurines not made on a potter's wheel. 
</span>
            </p>
                <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-1000</div>

            </div>
           

            

            <div class="box">
                <img src="clay pots 1.jpg" alt="">
                <h3>Colorful clay pots</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p> Clay-based pottery can be divided into three main groups: earthenware, stoneware and porcelain.

                    <span class="read-more-text"> These require increasingly more specific clay material, and increasingly higher firing temperatures. 
                    </span>
            </p>
                    <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-216</div>
            </div>


            <div class="box">
                <img src="2e85539d848f301bf52a9703a9f52fec.jpg" alt="">
                <h3>Navratri garba pot</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p> Clay-based pottery can be divided into three main groups: earthenware, stoneware and porcelain.
                    <span class="read-more-text"> These require increasingly more specific clay material, and increasingly higher firing temperatures. 
                    </span>
            </p>
                    <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-216</div>
            </div>

            <div class="box">
                <img src="beautiful-painted-colorful-terracotta-pots-600w-1883422537.webp" alt="">
                <h3>Colorful clay pots</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p> Clay-based pottery can be divided into three main groups: earthenware, stoneware and porcelain.
                    <span class="read-more-text"> These require increasingly more specific clay material, and increasingly higher firing temperatures. 
                    </span>
            </p>
                    <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-216</div>
            </div>

            <div class="box">
                <img src="b9d2a1f8e62bc619cc46d7180a278e7c.jpg" alt="">
                <h3>Colorful clay pots</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p> Clay-based pottery can be divided into three main groups: earthenware, stoneware and porcelain.
                    <span class="read-more-text"> These require increasingly more specific clay material, and increasingly higher firing temperatures. 
                    </span>
            </p>
                    <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-216</div>
            </div>

            <div class="box">
                <img src="depositphotos_43016753-stock-photo-clay-toys-udmurt-style.jpg" alt="">
                <h3>clay pots toys</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p> Clay-based pottery can be divided into three main groups: earthenware, stoneware and porcelain.
                    <span class="read-more-text"> These require increasingly more specific clay material, and increasingly higher firing temperatures. 
                    </span>
            </p>
                    <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-216</div>
            </div>

            <div class="box">
                <img src="remi-clay-kitchen-toys-500x500.jpg" alt="">
                <h3>Remi clay kitchen toys</h3>
                <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p> Clay-based pottery can be divided into three main groups: earthenware, stoneware and porcelain.
                    <span class="read-more-text"> These require increasingly more specific clay material, and increasingly higher firing temperatures. 
                    </span>
            </p>
                    <span class="read-more-btn">Read more...</span>
                <div class="price"> RS-216</div>
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