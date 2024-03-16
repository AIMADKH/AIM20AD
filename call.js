document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // منع تقديم النموذج
    
    // إظهار إشعار "تم الإرسال"
    document.getElementById('notification').style.display = 'block';
    
    // إرسال البيانات إلى خادم الويب (يمكنك تنفيذ هذا باستخدام AJAX أو Fetch API)
    // تمثيل هنا لغرض التوضيح فقط
    setTimeout(function() {
      document.getElementById('contactForm').reset(1000); // إعادة تعيين النموذج بعد فترة زمنية
      document.getElementById('notification').style.display = 'none'; // إخفاء الإشعار بعد فترة زمنية
    }, 10000); // 10 ثواني
  });

  













