<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Спасибо за визит!</title>
<style>
    body {
        background-color: black;
        color: white;
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 0;
        padding: 0;
    }
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .text {
        font-size: 24px;
        margin-bottom: 20px;
    }
    .button {
        padding: 10px 20px;
        background-color: #ff4500;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .button:hover {
        background-color: #ff6347;
    }
</style>
</head>
<body>
<div class="container">
    <div class="text">
        <p>Спасибо, что ты приехала ко мне,</p>
        <p>Ты мне очень сильно понравилась за эти 2 дня, которые мы гуляли.</p>
        <p>Я буду сильно скучать по тебе,</p>
        <p>и очень надеюсь, что мы с тобой еще не раз встретимся!</p>
    </div>
    <button class="button" onclick="redirect()">Тыкни здесь!</button>
</div>

<script>
    function redirect() {
        // Перенаправляем на другую страницу по клику на кнопку
        window.location.href = "";
    }
</script>

</body>
</html>
