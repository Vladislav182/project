<!DOCTYPE html>
<html lang="bg">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="./images/favicon.jpg" type="image/x-icon" />
    <title>Barber Shop Fonchi | АКАДЕМИЯ</title>
    <script
      src="https://kit.fontawesome.com/c8e4d183c2.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
  <?php include('template/header.php')?>
  
    <section class="main-academy-section">
      <h1>
        В Barber Shhop Fonchi Academy ще ви научим не само как да работите като
        професионалист, но и как да мислите като професионалист.
      </h1>
      <div class="main-info-of-the-academy-container">
        <div class="box">
          <div class="image-section">
            <img src="./images/academia1.png" alt="Индивидуален подход" />
          </div>
          <div class="header-section">
            <h2>Индивидуален подход</h2>
          </div>
          <div class="main-text-section">
            <p>- Практика с водещ специалист;</p>
            <p>
              - 40% по-ефективно обучение от масовите семинари и класове в
              големи групи;
            </p>
          </div>
        </div>
        <div class="box">
          <div class="image-section">
            <img src="./images/academia2.png" alt="Материална база" />
          </div>
          <div class="header-section">
            <h2>Материална база</h2>
          </div>
          <div class="main-text-section">
            <p>- Курс за начинаещи и специалисти;</p>
            <p>
              - Учебният център разполага с всички необходими материали за
              обучението на бъдещите фризьори и бръснари;
            </p>
          </div>
        </div>
        <div class="box">
          <div class="image-section">
            <img src="./images/academia3.png" alt="Редовна практика" />
          </div>
          <div class="header-section">
            <h2>Редовна практика</h2>
          </div>
          <div class="main-text-section">
            <p>
              - Всички преподаватели са практикуващи майстори в Head Hunters
              Barbershop;
            </p>
          </div>
        </div>
        <div class="box">
          <div class="image-section">
            <img src="./images/academia4.png" alt="Култура на професията" />
          </div>
          <div class="header-section">
            <h2>Култура на професията</h2>
          </div>
          <div class="main-text-section">
            <p>
              - Курсистите се впускат в истинската атмосфера на работата на
              бръснарницата;
            </p>
            <p>- Влизат в професия на бръснар;</p>
          </div>
        </div>
      </div>
      <h1 style="margin: 40px 0 20px 0">
        Нашите курсове в Barber Shhop Fonchi
      </h1>
      <div class="courses-container">
        <div class="course-box">
          <div class="course-logo">
            <img src="./images/course-logo-1.png" alt="Course Logo" />
          </div>
          <div class="course-heading">
            <h2>Курс за напреднали фризьори</h2>
          </div>
          <div class="main-course-info">
            <p>
              Ние преподаваме методи на работа при мъжко подтсригване, брада,
              бръснене и козметични услуги за напреднали фризьори.
            </p>
            <p id="duration">
              Продължителност 1 седмица (5 работни дни) 40 часа.
            </p>
            <p>В този курс:</p>
            <ul>
              <li>Ще ви представим 2 алгоритъма на Fade.</li>
              <li>Ще ви научим на актуални бръснарски подстригвания.</li>
              <li>
                Ще придобиете умението да създавате индивидуална и уникална
                геометрия на брадата в унисон с характеристиките на лицето.
              </li>
              <li>
                Ще ви научим на методи за кралско бръснене, контуриране, работа
                с бръснач.
              </li>
            </ul>
          </div>
        </div>
        <div class="course-box">
          <div class="course-logo">
            <img src="./images/course-logo-2.png" alt="Course Logo" />
          </div>
          <div class="course-heading">
            <h2>Курс Бръснар от 0</h2>
          </div>
          <div class="main-course-info">
            <p>
              Ние обучаваме професионалисти, които придобиват теоретични и
              практически знания за да се развиват успешно и да бъдат част от
              бръснарското общество.
            </p>
            <p id="duration">
              Продължителност: 5 седмици (102 учебни часа). Часове на провеждане
              – от 10.00 до 14.00/4 учебни часа на ден. Часове теория - 20.
              Часове практика - 82.
            </p>
            <p>В този курс:</p>
            <ul>
              <li>
                Научавате уникални методи за работа с ножица, машинки, бръснач.
              </li>
              <li>
                Ще усвоите 8 Основни (базови) подстригвния в мъжкото
                фризьорство.
              </li>
              <li>Ще се научите на 5 вида Fade.</li>
            </ul>
          </div>
        </div>
      </div>
      <p id="course-buy-info">
        Ако искате да преминете някой от нашите курсове за бръснари, моля
        цъкнете бутона по-долу, който ще ви отпрати към контактната форма на уеб
        сайта ни, където докато попълвате формата молим да напишете като
        допълнителен коментар, че се вълнувате повече за един от двата курса и
        ние ще ви върнем отговор с пълна информация за курсовете и начин, по
        който може да се запишете!
      </p>
      <button>
        <a href="contacts.php"> КЪМ КОНТАКТИ </a>
      </button>
    </section>
    
    <?php include('template/footer.php')?>

    <script src="./js/nav.js"></script>
  </body>
</html>
