<?php include('header.php'); ?>

<!-- Sezione Home -->
<div id="home" class="section" style="position: relative; padding: 40px 20px; text-align: center;">
    <h1 class="section-title" style="margin: 0; display: inline-block;">
       <span class="highlight">Il Chioschino Giallo</span>
    </h1>
    
    <p style="max-width: 800px;
           margin: 20px auto;
           font-size: 1.2em;
           line-height: 1.8;
           color: #ffffff;
           padding: 15px 0;
           opacity: 0;
           animation: fadeInUp 0.8s ease-out forwards;
           animation-delay: 0.4s;
           text-align: left;
           display: block;">
        <strong>Lo street food come piace a te, nel cuore di Grosseto!</strong><br>
        Siamo sempre qui, pronti a servirti <strong>hamburger di alta qualità</strong>, <strong>hot-dog con insaccati artigianali</strong> e il mitico <strong>lampredotto</strong>, preparati con ingredienti freschi e tanta passione.
    </p>
</div>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<?php include('menu.php'); ?>

<div style="border-bottom: 3px solid #dcdcdc;"></div>

<?php include('contatti.php'); ?>

<div style="border-bottom: 3px solid #dcdcdc;"></div>

<?php include('footer.php'); ?>