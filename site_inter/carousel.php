<div class="carousel-container">
    <div class="carousel">
        <div class="carousel-item"><img src="imagens/imagem2.jpg" alt="Image 1"></div>
        <div class="carousel-item"><img src="imagens/imagem1.jpg" alt="Image 2"></div>
        <div class="carousel-item"><img src="imagens/imagem3.jpg" alt="Image 3"></div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<style>
.carousel-container {
    position: relative;
    max-width: 700px; /* Ajuste conforme necessário */
    margin: auto;
    margin-top: 70px;
}

.carousel {
    display: flex;
    overflow: hidden;
}

.carousel-item {
    min-width: 100%;
    transition: transform 0.5s ease;
}

.carousel img {
    width: 100%;
    border-radius: 10px; /* Bordas arredondadas */
}

.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 24px; /* Aumentando o tamanho da fonte */
    transition: 0.6s ease;
    background-color: rgba(0, 0, 0, 0.5); /* Adicionando cor de fundo */
    padding: 10px; /* Adicionando preenchimento para aumentar a área de clique */
    border-radius: 0 3px 3px 0;
    user-select: none;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
    color: yellow; /* Alterando a cor ao passar o mouse */
}
</style>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("carousel-item");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}
</script>
