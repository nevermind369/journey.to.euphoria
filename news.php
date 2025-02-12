<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>سوالات متداول</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="faq-container">
    <h2>سوالات متداول</h2>
    
    <div class="faq-item">
      <button class="faq-question">چگونه می‌توانم محصولی خریداری کنم؟</button>
      <div class="faq-answer">
        <p>برای خرید محصول، ابتدا به صفحه محصولات بروید و محصول مورد نظر خود را انتخاب کنید. سپس مراحل پرداخت را طی کنید.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">چطور می‌توانم وضعیت سفارش خود را پیگیری کنم؟</button>
      <div class="faq-answer">
        <p>برای پیگیری وضعیت سفارش خود، وارد حساب کاربری خود شوید و در بخش "تاریخچه سفارشات" وضعیت سفارش خود را مشاهده کنید.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">آیا امکان بازگشت محصول وجود دارد؟</button>
      <div class="faq-answer">
        <p>بله، شما می‌توانید محصول خریداری شده را در مدت 7 روز پس از دریافت، بازگشت دهید. برای اطلاعات بیشتر به بخش "بازگشت کالا" مراجعه کنید.</p>
      </div>
    </div>
  </div>

  <script>
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
      question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
      });
    });
  </script>
</body>
</html>
