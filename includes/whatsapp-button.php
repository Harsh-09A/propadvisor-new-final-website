<!-- WhatsApp Floating Button Wrapper -->
<div class="whatsapp-container">
    <a
        href="https://wa.me/919029929777?text=We%20would%20like%20to%20discuss%20a%20Mandate%20Project"
        target="_blank"
        class="whatsapp-btn">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp Chat" />
    </a>
</div>
<style>
    .whatsapp-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
    }

    .whatsapp-btn {
        width: 60px;
        height: 60px;
        background-color: #25D366;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
        transition: all 0.3s ease;
    }

    .whatsapp-btn img {
        width: 32px;
        height: 32px;
    }

    .whatsapp-btn:hover {
        transform: scale(1.1);
    }

    /* Optional: smaller on mobile */
    @media (max-width: 576px) {
        .whatsapp-btn {
            width: 50px;
            height: 50px;
        }

        .whatsapp-btn img {
            width: 26px;
            height: 26px;
        }
    }
</style>