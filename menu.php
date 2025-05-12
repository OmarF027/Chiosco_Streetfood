<section id="menù" class="sezione">
    <div class="section-inner">
        <h2>Scopri il nostro menu!</h2>
        <div class="grid">
            <!-- Card Hamburger -->
            <div class="item">
                <a href="img/hamburger.jpg" target="_blank">
                    <img src="img/hamburger.jpg" alt="Delizioso hamburger con carne fresca e ingredienti di qualità">
                </a>
                <div class="content">
                    <h3>Hamburger</h3>
                    <p>Carne fresca, pane morbido e ingredienti top. Un classico che non passa mai di moda.</p>
                </div>
            </div>
            
            <!-- Card Hot Dog -->
            <div class="item">
                <a href="img/hotdog.jpg" target="_blank">
                    <img src="img/hotdog.jpg" alt="Hot dog preparato con salsiccia artigianale e condimenti freschi">
                </a>
                <div class="content">
                    <h3>Hot Dog</h3>
                    <p>Salsiccia artigianale, pane caldo e condimenti freschi. Un'esplosione di sapori!</p>
                </div>
            </div>
            
            <!-- Card Lampredotto -->
            <div class="item">
                <a href="img/lampredotto.jpg" target="_blank">
                    <img src="img/lampredotto.jpg" alt="Lampredotto con salsa verde, piatto tipico della tradizione fiorentina">
                </a>
                <div class="content">
                    <h3>Lampredotto</h3>
                    <p>Il nostro lampredotto, preparato con passione e secondo la tradizione fiorentina. Non può mancare!</p>
                </div>
            </div>
        </div>

        <div class="order-button-container" style="text-align: center; margin-top: 80px; margin-bottom: 80px;">
        <a href="https://glovoapp.com" target="_blank" class="order-button" 
       style="display: inline-block; background-color: #FFD700; color: #000; padding: 16px 32px; font-size: 18px; font-weight: bold; text-transform: uppercase; border: 2px solid #FFD700; border-radius: 50px; text-decoration: none; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); 
       transition: all 0.3s ease-in-out; position: relative; overflow: hidden;">
       <span style="position: relative; z-index: 2;">ORDINA CON GLOVO</span>
       <span class="hover-effect" style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent); transition: all 0.4s ease;"></span>
    </a>
</div>

<style>
    .order-button {
        display: inline-block;
        background-color: #FFD700;
        color: #000;
        padding: 16px 32px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        border: 2px solid #FFD700;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .order-button:hover {
        transform: translateY(-4px) scale(1.05);
        background-color: #e6c200;
        box-shadow: 0 8px 25px rgba(255, 215, 0, 0.4);
        color: #333;
    }

    .order-button:active {
        transform: translateY(1px) scale(0.98);
    }

    .order-button:hover .hover-effect {
        left: 100%;
    }

    .order-button .hover-effect {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: all 0.4s ease;
    }

    /* Pulsing Animation */
    @keyframes pulse {
        0% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.1); opacity: 0.8; }
        100% { transform: scale(1); opacity: 1; }
    }

    .order-button:hover {
        animation: pulse 1.5s infinite;
    }
</style>

