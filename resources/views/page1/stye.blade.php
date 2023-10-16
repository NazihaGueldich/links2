<style> .text-blue-placeholder::placeholder {
    color: blue;


  }
  .image-slideshow {
    position: relative;
    width: 100%;
    max-height: 690px;
    overflow: hidden;
}

.slideshow-image {
    display: none;
}

.slideshow-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-circles {
    text-align: center;
    margin-top: 10px;
}

.circle {
    display: inline-block;
    width: 12px;
    height: 12px;
    background-color: #999;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
}

.circle.active {
    background-color: #333; /* Couleur pour le cercle actif */
}


  </style>
