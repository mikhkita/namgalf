<?

$mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4)));

if( $mobile ){
	header("Location: http://t-f-a.ru/m/");
}

?><!DOCTYPE html>
<html>
<head>
	<title>Агентство комплексного интернет-маркетинга. Как стать лидером через Landing Page за 6 месяцев</title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta name="viewport" content="width=1210">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/chosen.min.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">

	<link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1024px)" href="css/layout-tablet.css">
	<link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 767px)" href="css/layout-mobile.css">

	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
	<meta name="application-name" content=""/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="favicon/mstile-144x144.png" />
</head>
<body>
	<div class="b-overflow">
		<div class="b b-1">
			<div class="b-block b-header">
				<div class="b-header-top clearfix">
					<a href="#" class="b-logo left">
						<img src="i/1/logo@2x.png" alt="" width=106>
						<div class="b-logo__text">Агентство интернет-маркетинга</div>
					</a>
					<!-- <ul class="b-menu right justify">
						<li class="anim fadeRight"><a href="#">TFA</a></li>
						<li class="anim fadeRight delay100"><a href="#">Услуги</a></li>
						<li class="anim fadeRight delay200"><a href="#">Портфолио</a></li>
						<li class="anim fadeRight delay300"><a href="#">Проекты</a></li>
						<li class="anim fadeRight delay400"><a href="#">Блог</a></li>
						<li class="anim fadeRight delay500"><a href="#">Вакансии</a></li>
						<li class="anim fadeRight delay600"><a href="#">Контакты</a></li>
					</ul> -->
				</div>
				<h1 class="anim fadeDown">Как стабильно получать <b>платёжеспособных клиентов</b> из Интернета и обогнать рынок на 3-5 лет?</h1>
				<p class="anim fadeDown delay200">Построим стабильную систему генерации прибыли <span class="b-svg-rubles"></span> один раз — и вам больше не придется  вкладываться в маркетинг</p>
				<div class="anim fadeDown delay400">
					<a href="#b-quiz-popup" class="b-btn b-green-btn b-quiz-link" id="b-quiz-payback" data-block="b-quiz-popup"><span>Рассчитать окупаемость</span></a>
					<!-- <a href="#" class="b-btn b-green-btn b-go" data-block=".b-top-surgay" data-offset="200"><span>Рассчитать окупаемость</span></a> -->
				</div>
				<div class="b-tfa-grey">система TFA</div>
				<div class="b-three-crirles">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="b-block b-top-surgay clearfix">
				<div class="b-right right">
					<div class="b-director-desc b-director-desc-3 left">
						<p class="anim fadeRight"><b>Владимир Сургай</b></p>
						<h4 class="anim fadeRight delay200">Основатель агентства<br>интернет-маркетинга TFA</h4>
					</div>
					<h2><b>Здравствуйте. </b>Мы помогаем бизнесу становиться на порядок эффективнее и прибыльнее</h2>
					<div class="b-right-padding">
						<h3>Мы не продаем лендинг или трафик.<span class="thin"> Мы предлагаем достижение Ваших бизнес-целей, </span> <b>комплексно влияя 
							<div class="b-20-indexes">
								<a href="#" onclick="return false;">более чем на 10 показателей.</a>
								<div class="b-note b-20-indexes-note">
									<div class="b-border">
										<h4>Cost Per Click/Mile</h4>
										<h4>Cost Per Lead</h4>
										<h4>Cost Per Customer</h4>
										<h4>LifeTime Value</h4>
										<h4>Earn Per Click</h4>
										<h4>Click-Through rate</h4>
										<h4>Средний чек</h4>
										<h4>Частота покупок</h4>
										<h4>Цикл сделки</h4>
										<h4>Конверсия в заявку</h4>
										<h4>Конверсия в продажу</h4>
										<h4>Чистая прибыль</h4>
									</div>
								</div>
							</div></b>
							<span class="thin">Вся команда засучив рукава полгода будет работать над Вашим проектом.<br> Вы получаете:</span>
						</h3>
						<div class="b-indicators">
							<div class="b-indicators__item fadeRight anim" data-cont=".b-indicators">
								<div class="b-indicators__item-img"><img src="i/1/1.png" alt=""></div>
								<h4>от 10 до 800<br>заявок в сутки</h4>
							</div>
							<div class="b-indicators__item delay100 fadeRight anim" data-cont=".b-indicators">
								<div class="b-indicators__item-img"><img src="i/1/2.png" alt=""></div>
								<h4>Авто-утепление<br>лидов</h4>
							</div>
							<!-- <div class="b-indicators__item delay200 fadeRight anim" data-cont=".b-indicators">
								<div class="b-indicators__item-img"><img src="i/1/3.png" alt=""></div>
								<h4>по LTV</h4>
							</div> -->
							<div class="b-indicators__item delay300 fadeRight anim" data-cont=".b-indicators">
								<div class="b-indicators__item-img"><img src="i/1/4.png" alt=""></div>
								<h4>Рост чистой прибыли<br>на 90-290% прибыли</h4>
							</div>
						</div>
						<h3><b>Сейчас в России и СНГ</b> <span class="b-svg-map"></span> практически <b>нет специалистов</b>, которые подходят к Вашему маркетингу настолько тщательно.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="b b-2">
			<div class="b-block">
				<div class="b-check" data-enllax-ratio=".12" data-enllax-type="foreground"></div>
				<div class="b-circle" data-enllax-ratio=".12" data-enllax-type="foreground"></div>
				<h2><b>Из всех,</b> кто побывал на вашем сайте, покупают лишь <b>0,1-1%</b></h2>
				<h3>потому что они:</h3>
				<div class="b-four" id="b-four-1">
					<div class="b-four__item fadeDown anim" data-cont="#b-four-1">
						<img src="i/2/door-1.jpg" alt="">
						<h4><b>Не доверяют</b><br>вашему сайту</h4>
					</div>
					<div class="b-four__item fadeDown anim delay200" data-cont="#b-four-1">
						<img src="i/2/door-2.jpg" alt="">
						<h4><b>Не в восторге</b> от<br>предложения на <br>сайте</h4>
					</div>
					<div class="b-four__item fadeDown anim delay400" data-cont="#b-four-1">
						<img src="i/2/door-3.jpg" alt="">
						<h4>Зашли, сравнили<br>предложения и <b>ушли<br>к конкурентам</b></h4>
					</div>
					<div class="b-four__item fadeDown anim delay600" data-cont="#b-four-1">
						<img src="i/2/door-4.jpg" alt="">
						<h4><b>Хотят подумать,</b><br> даже если ваше <br>предложение в <br>целом устраивает</h4>
					</div>
				</div>
				<h3>при этом вы уже потратились на:</h3>
				<div class="b-four b-second-four" id="b-four-2">
					<div class="b-four__item fadeDown anim" data-cont="#b-four-2">
						<img src="i/2/img-1.jpg" alt="">
						<h4><b>Настройку<br>рекламы</b><br>и её бюджет</h4>
					</div>
					<div class="b-four__item fadeDown anim delay200" data-cont="#b-four-2">
						<img src="i/1/3.png" alt="">
						<h4><b>Создание<br> сайта</b></h4>
					</div>
					<div class="b-four__item fadeDown anim delay400" data-cont="#b-four-2">
						<img src="i/2/img-3.jpg" alt="">
						<h4><b>Зарплату<br>менеджеров</b> и моря<br>специалистов</h4>
					</div>
					<div class="b-four__item fadeDown anim delay600" data-cont="#b-four-2">
						<img src="i/2/img-4.jpg" alt="">
						<h4><b>SEO, SMM, таргет</b><br>и другие, иногда<br>непонятные, слова</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="b b-3">
			<div class="b-block">
				<div class="b-audience">
					<h3>Мы охватываем больше аудитории</h3>
					<h2>в 5-8 раз</h2>
					<h3>и снижаем затраты на её привлечение</h3>
				</div>
				<div class="b-levels" data-offset="750">
					<div class="b-levels-titles clearfix">
						<h2 class="left"><b>Работаем</b> на всех уровнях принятия решений</h2>
						<p class="b-quotes right">Так привлекаем даже тех, кто ещё не думал о вашем товаре, и создаем у них потребность</p>
					</div>
					<h3>Как это выглядит:</h3>
					<div class="b-levels-image">
						<h4 class="b-levels-text b-levels-text-1">С «информационных» запросов<br> цепляем утепляющими квиз-<br>лендингами. Их эффективность<br> до 6 раз выше стандартных<br> Landing Page</h4>
						<h4 class="b-levels-text b-levels-text-2">«Горячий» трафик ведем на<br> основной «лендинг-атлант»<br> с высокой конверсией</h4>
						<h4 class="b-levels-text b-levels-text-3">Тех, кто ушел, догоняем<br>ретаргетингом с ценными<br>лидмагнитами</h4>
						<div class="b-levels-line b-levels-line-1 svg-anim anim"anim" data-func="svg-anim" data-id="levels-line-1" data-cont=".b-levels">
							<svg width="283px" height="284px" viewBox="0 0 283 284" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							    <defs></defs>
						        <g fill="none" stroke="#5E4ABB">
						        	<path d="M1,1 C-0.880588162,71.4520167 24.1674784,135.39741 75.6441996,192.336179 C127.120921,249.274949 195.406188,278.996638 280.5,281.501247" id="level-line-path-1" stroke-width="1" data-stroke="#5E4ABB" style="stroke-dasharray: 450px; stroke-dashoffset: 450px;"></path>
									<animate 
							           xlink:href="#level-line-path-1"
							           attributeType="CSS"
							           attributeName="stroke-dashoffset"
							           from="450px"
							           to="0px"
							           dur="0.75s"
							           begin="infinity"
							           fill="freeze"
							           repeatCount="1"
							           id="levels-line-1">
							        </animate>
						        </g>
							</svg>
						</div>
						<div class="b-levels-line b-levels-line-2 svg-anim anim"anim" data-func="svg-anim" data-id="levels-line-2-1" data-cont=".b-levels">
							<svg width="59px" height="346px" viewBox="0 0 59 346" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <defs></defs>
						    <g fill="none" stroke="#5E4ABB">
						    	<path d="M57.5,0.5 L57,42.5" id="level-line-path-2-1" stroke-width="1" data-stroke="#5E4ABB" style="stroke-dasharray: 50px; stroke-dashoffset: 50px;"></path>
						    	<path d="M53.5,111.5 C50.7838828,165.87294 45.3229739,212.258585 37.1172734,250.656937 C28.9115728,289.055288 16.705815,320.002976 0.5,343.5" id="level-line-path-2-2" stroke-width="1" data-stroke="#5E4ABB" style="stroke-dasharray: 300px; stroke-dashoffset: 300px;"></path>
						    	<animate 
						           xlink:href="#level-line-path-2-1"
						           attributeType="CSS"
						           attributeName="stroke-dashoffset"
						           from="50px"
						           to="0px"
						           dur="0.1s"
						           begin="infinity"
						           fill="freeze"
						           repeatCount="1"
						           id="levels-line-2-1">
						        </animate>
					            <animate 
						           xlink:href="#level-line-path-2-2"
						           attributeType="CSS"
						           attributeName="stroke-dashoffset"
						           from="300px"
						           to="0px"
						           dur="0.8s"
						           begin="levels-line-2-1.end+0.01s"
						           fill="freeze"
						           repeatCount="1"
						           id="levels-line-2-2">
						        </animate>
						    </g>
							</svg>
						</div>
						<div class="b-levels-line b-levels-line-3 svg-anim anim"anim" data-func="svg-anim" data-id="levels-line-3-1" data-cont=".b-levels">
							<svg width="283px" height="378px" viewBox="0 0 283 378" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							    <defs></defs>
							    <g fill="none" stroke="#5E4ABB">
	        						<path d="M263.5,0.5 C267.001525,7.46588542 270.016034,15.7992187 272.543527,25.5 C275.071019,35.2007812 276.723177,43.5341146 277.5,50.5" id="level-line-path-3-1" stroke-width="1" data-stroke="#5E4ABB" style="stroke-dasharray: 60px; stroke-dashoffset: 60px;"></path>
	        						<path d="M280.5,109.5 C275.49256,183.619467 247.164621,246.301984 195.516183,297.547552 C143.867746,348.79312 78.8623512,375.111131 0.5,376.501584" id="level-line-path-3-2" stroke-width="1" data-stroke="#5E4ABB" style="stroke-dasharray: 490px; stroke-dashoffset: 490px;"></path>
	        						<animate 
							           xlink:href="#level-line-path-3-1"
							           attributeType="CSS"
							           attributeName="stroke-dashoffset"
							           from="60px"
							           to="0px"
							           dur="0.1s"
							           begin="infinity"
							           fill="freeze"
							           repeatCount="1"
							           id="levels-line-3-1">
							        </animate>
						            <animate 
							           xlink:href="#level-line-path-3-2"
							           attributeType="CSS"
							           attributeName="stroke-dashoffset"
							           from="490px"
							           to="0px"
							           dur="0.8s"
							           begin="levels-line-3-1.end+0.01s"
							           fill="freeze"
							           repeatCount="1"
							           id="levels-line-3-2">
							        </animate>
							    </g>
							</svg>
						</div>
					</div>
					<h3 class="b-levels-email anim fadeDown delay1000" data-cont=".b-levels"><img src="i/3/mail.svg" alt="">Всех, кто попал в базу, <b>автоматически «прогреваем»</b> и «дожимаем» через email-рассылки, <b>мессенджеры</b> и SMS</h3>
				</div>
			</div>
		</div>
		<div class="b b-4">
			<div class="b-block">
				<div class="b-check" data-enllax-ratio=".12" data-enllax-type="foreground"></div>
				<div class="b-circle" data-enllax-ratio=".12" data-enllax-type="foreground"></div>
				<h2 class="b-first-title"><b>Кажется, это просто.</b> На деле нужно учесть десятки нюансов</h2>
				<div>
					<div class="b-three-crirles">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<h2 class="b-second-title"><b>Даем</b> точно то, что искали</h2>
				<p>Четко простраиваем каждое звено в цепочке  «запрос — объявление — сайт».<br>В результате получаем до сотни связок. <strong>Например:</strong></p>
			</div>
			<div class="b-give-slider">
				<div class="b-give-slide">
					<div class="b-block">
						<div class="b-request green"><p>Студия современного танца<br>в Москве в ЮЗАО</p><h4 class="b-label">Запрос</h4></div>
						<div class="b-blank" style="background-image: url('i/4/blank-1.png');"><h4 class="b-label">Объявление</h4></div>
						<p class="b-give-text"><strong>И так по всем запросам,</strong><br>чтобы выжать максимум из каждого<br>рубля рекламного бюджета</p>
						<div class="b-ipad" style="background-image: url('i/4/ipad-1.jpg');"></div>
					</div>
				</div>
				<div class="b-give-slide">
					<div class="b-block">
						<div class="b-request yellow"><p>Хип хоп для детей<br>в Москве</p><h4 class="b-label">Запрос</h4></div>
						<div class="b-blank" style="background-image: url('i/4/blank-2.png');"><h4 class="b-label">Объявление</h4></div>
						<p class="b-give-text"><strong>И так по всем запросам,</strong><br>чтобы выжать максимум из каждого<br>рубля рекламного бюджета</p>
						<div class="b-ipad" style="background-image: url('i/4/ipad-2.jpg');"></div>
					</div>
				</div>
				<div class="b-give-slide">
					<div class="b-block">
						<div class="b-request blue"><p>Танцы метро Теплый Стан</p><h4 class="b-label">Запрос</h4></div>
						<div class="b-blank" style="background-image: url('i/4/blank-3.png');"><h4 class="b-label">Объявление</h4></div>
						<p class="b-give-text"><strong>И так по всем запросам,</strong><br>чтобы выжать максимум из каждого<br>рубля рекламного бюджета</p>
						<div class="b-ipad" style="background-image: url('i/4/ipad-3.jpg');"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="b b-5">
			<div class="b-block">
				<h2><b>Доводим</b> каждый<br>инструмент до совершенства</h2>
				<div class="b-two-blocks clearfix" data-offset="200">
					<p class="b-one anim fadeDown" data-cont=".b-5 .b-two-blocks">
						<span class="b-number">1</span>
						<strong>Прежде чем</strong> создать сайт, лендинг и даже рекламный баннер, мы разрабатываем его прототип
					</p>
					<p class="b-two anim fadeDown delay200" data-cont=".b-5 .b-two-blocks">
						<span class="b-number">2</span>
						<strong>Для этого</strong> погружаемся в ваш бизнес, рынок, целевую аудиторию, конкурентов.
					</p>
				</div>
				<p class="anim fadeDown delay400" data-cont=".b-5 .b-two-blocks"><strong>Посмотрите:</strong> это 1/10 часть материалов, которые создаются на этапе разработки</p>
				<div class="b-diagram">
					<div class="b-diagram-tabs-wrap">
						<ul class="b-tabs b-diagram-tabs justify" data-tabs=".b-diagram-tabs-cont">
							<li class="active">Отчет по точке А</li>
							<li>Анализ ЦА</li>
							<li>Анализ конкурентов</li>
							<li>Карта смыслов</li>
							<li>Прототипы</li>
						</ul>
						<div class="b-tabs-line">
							<span></span>
						</div>
					</div>
					<div class="b-tabs-cont b-diagram-tabs-cont">
						<div class="b-tab">
							<img src="i/5/table.jpg" alt="">
						</div>
						<div class="b-tab">
							<img src="i/5/table.jpg" alt="">
						</div>
						<div class="b-tab">
							<img src="i/5/table.jpg" alt="">
						</div>
						<div class="b-tab">
							<img src="i/5/table.jpg" alt="">
						</div>
						<div class="b-tab">
							<img src="i/5/table.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="b b-6">
			<div class="b-block">
				<h2><b>Ведем</b> умную Email-рассылку<span class="b-svg-mail"></span></h2>
				<p>Разрабатываем ее для каждого сегмента,  а не «стреляем пушкой по воробьям»<br><br><strong>Например:</strong></p>
				<div class="b-three-blocks justify" id="b-three-blocks-1">
					<div class="b-three-block fadeDown anim" data-cont="#b-three-blocks-1">
						<img src="i/6/pic-1.jpg" alt="">
						<h4><b>Пришел «просто узнать»</b><br>Погреваем, показываем<br>экспертность, создаем<br>и усиливаем доверие</h4>
					</div>
					<div class="b-three-block fadeDown delay200 anim" data-cont="#b-three-blocks-1">
						<img src="i/6/pic-2.jpg" alt="">
						<h4><b>Точно заинтересован</b><br>Сразу показываем выгоды<br>работы с вами, преимущества<br>товара, отзывы</h4>
					</div>
					<div class="b-three-block fadeDown delay400 anim" data-cont="#b-three-blocks-1">
						<img src="i/6/pic-3.jpg" alt="">
						<h4><b>Не достаточно мотивации</b><br>Делаем рассылку с акциями,<br>индивидуальными<br>предложениями</h4>
					</div>
				</div>
				<div class="b-zhgenti clearfix">
					<div class="b-woman left">
						<p class="anim fadeRight">Ольга Жгенти<span class="b-svg-vk"></span></p>
						<h4 class="anim fadeRight delay200">Контент и Email-маркетолог TFA</h4>
					</div>
					<div class="b-woman-text left">
						<h3>Тот же принцип используем в автоматической цепочке</h3>
						<p>Это дает уровень открываемости до 90%, конверсию в заявку до 56%. Главное вы получаете более теплых клиентов, которые уже готовы платить.</p>
					</div>
					<div class="b-check" data-enllax-ratio=".12" data-enllax-type="foreground"></div>
					<div class="b-pigeon" data-enllax-ratio="-0.12" data-enllax-type="foreground"></div>
				</div>
			</div>
		</div>
		<div class="b b-7 black">
			<div class="b-block">
				<h2>Над вашим проектом будет работать <b>вся команда</b></h2>
				<h3>Каждый из них необходим для роста вашей прибыли</h3>
				<div class="b-team">
					<div class="b-team-item" style="width: 27%;margin-left: 5%;padding-left: 88px;">
						<p><b>Владимир Сургай</b></p>
						<small>Сооснователь TFA,<br>ведущий маркетолог</small>
					</div>
					<div class="b-team-item" style="width: 20%;padding-left: 40px;padding-top: 268px;">
						<p><b>Артем Федорченко</b></p>
						<small>Ассистент руководителя</small>
					</div>
					<div class="b-team-item" style="width: 22%;padding-top: 288px;">
						<p><b>Сергей</b></p>
						<small>Копирайтер</small>
					</div>
					<div class="b-team-item" style="padding-right: 41px;width: 26%;">
						<p><b>Даниил</b></p>
						<small>Дизайнер</small>
					</div>
					<div class="b-team-item" style="width: 26%;margin-left: 5%;padding-left: 110px;padding-top: 288px;">
						<p><b>Роман Твердохлеб</b></p>
						<small>Сооснователь TFA,<br>технический директор</small>
					</div>
					<div class="b-team-item" style="width: 23%;padding-left: 56px;padding-top: 288px;">
						<p><b>Пётр</b></p>
						<small>Руководитель отдела<br>digital production</small>
					</div>
					<div class="b-team-item" style="width: 25%;padding-right: 34px;padding-top: 288px;">
						<p><b>Кирилл</b></p>
						<small>Забота о клиентах</small>
					</div>
					<div class="b-team-item" style="width: 21%;padding-right: 2px;padding-top: 288px;">
						<p><b>Василий</b></p>
						<small>Забота о клиентах</small>
					</div>
					<div class="b-circle" data-enllax-ratio=".12" data-enllax-type="foreground"></div>
				</div>
			</div>
			<div class="b-block b-first-result">
				<h3>Первый результат вы получите уже</h3>
				<h2>через 7 дней</h2>
				<div><img src="i/7/lines.svg" alt=""></div>
				<div class="b-results">
					<h3 class="icon-screen anim fadeDown" data-cont=".b-results">Мы запустим несколько коротких сайтов на тестирование, чтобы собрать статистику и выявить лучшие варианты. Это даст первые заявки.</h3>
					<h3 class="icon-rubles anim fadeDown delay200" data-cont=".b-results"><strong>Ещё через 3 месяца ваши вложения начнут окупаться</strong></h3>
					<h3 class="icon-monitor anim fadeDown delay400" data-cont=".b-results">Все обращения станут более теплыми, потому<br>что будет готов основной сайт.</h3>
				</div>
			</div>
			<div class="b-block b-system">
				<h2><b>Через полгода</b> у вас будет примерно такая система</h2>
				<div class="b-scheme">
					<h4 class="icon-quote anim fadeDown" data-offset="300">В реальности она гораздо<br>сложнее. Сейчас мы даем вам лишь<br>общее понимание масштаба<span class="b-line"></span></h4>
					<a href="#b-quiz-popup" class="b-btn b-green-btn b-quiz-link" id="b-quiz-offer"><span>Рассчитать окупаемость</span></a>
				</div>
			</div>
		</div>
		<div class="b b-8">
			<div class="b-block">
				<h3>Результат такой системы: пока конкуренты не знают, где брать клиентов</h3>
				<h2>вы погружены в приятные хлопоты «Как же <b>обработать</b> столько заказов?»</h2>
				<div class="b-note-svg b-note-svg-1">
					<h2 class="anim fadeRight" data-cont=".b-note-svg-1">Самые платежеспособные<br>клиенты <b>хотят купить</b><br>прямо сейчас</h2>
					<p class="anim fadeRight delay200" data-cont=".b-note-svg-1">Таких не нужно прогревать, убеждать, мотивировать<br>скидками. Они просто приходят, чтобы отдать вам деньги.</p>
					<div class="b-img"></div>
				</div>
				<div class="b-note-svg b-note-svg-2">
					<h2 class="anim fadeRight" data-cont=".b-note-svg-2"><b>Регулируйте</b> поток клиентов<br>буквально в один клик</h2>
					<p class="anim fadeRight delay200" data-cont=".b-note-svg-2">Увеличили рекламный бюджет — заявок стало больше.<br>Не справляетесь с наплывом? Приостановили<br>рекламу или уменьшили бюджет. </p>
					<div class="b-img"></div>
				</div>
				<div class="b-note-svg b-note-svg-3">
					<h2 class="anim fadeRight" data-cont=".b-note-svg-3">Вложились в систему<br><b>один раз</b> — и она работает<br>на вас 5-6 лет</h2>
					<p class="anim fadeRight delay200" data-cont=".b-note-svg-3">Все настолько автоматизировано и выверено. Есть только<br>один вопрос «Сколько клиентов я могу обработать?»</p>
					<div class="b-img"></div>
				</div>
				<div class="b-note-svg b-note-svg-4">
					<h2 class="anim fadeRight" data-cont=".b-note-svg-4"><b>Занимаетесь</b> тем, что<br>действительно важно</h2>
					<p class="anim fadeRight delay200" data-cont=".b-note-svg-4">Маркетинг больше не отвлекает вас от бизнеса.<br>Вы можете сосредоточиться на масштабировании,<br>диферсификации, выходе на новые рынки.</p>
					<div class="b-img"></div>
				</div>
				<div class="b-note-svg b-note-svg-5">
					<h2 class="anim fadeRight" data-cont=".b-note-svg-5"><b>Вы — №1</b> в глазах<br>клиентов</h2>
					<p class="anim fadeRight delay200" data-cont=".b-note-svg-5">За счет визуальной упаковки, донесения<br>правильных смыслов и продуманной работы<br>с платёжеспособными сегментами целевой<br>аудитории.</p>
					<div class="b-img"></div>
				</div>
			</div>
		</div>
		<!-- <div class="b b-9">
			<div class="b-block">
				<h3>Чтобы построить систему, мы проведем ваш бизнес через</h3>
				<h2 class="b-title">12 этапов</h2>
				<h3>Это типовая Road map</h3>
				<h4 class="b-h4-days b-svg-finger anim fadeDown">Выберите конкретный<br>день — и посмотрите,<br>что мы будем делать.</h4>
				<div class="b-step-tabs-wrap">
					<ul class="b-tabs b-step-tabs justify" data-tabs=".b-step-slider">
						<li class="active">1-6</li>
						<li>7–11</li>
						<li>12–15</li>
						<li>16–36</li>
						<li>37–40</li>
						<li>41–54</li>
						<li>55–69</li>
						<li>70–83</li>
						<li>84–104</li>
						<li>105–118</li>
						<li>119–123</li>
						<li>124–144</li>
					</ul>
					<div class="b-tabs-line">
						<span></span>
					</div>
				</div>
			</div>
			<div class="b-step-slider">
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
				<div class="b-tab b-step-slide">
					<div class="b-block">
						<div class="b-text">
							<h2 class="slider-anim duration500 fadeDown"><b>Анализ рынка</b></h2>
							<p class="slider-anim duration500 fadeDown delay100">Получение информации от собственника. Анализ внешних источников. Анализ поисковых запросов</p>
							<p class="b-subtitle slider-anim duration500 fadeDown delay200"><b>Результаты этапа:</b></p>
							<h4 class="slider-anim duration500 fadeDown delay300">Получение информации от собственника<br>Анализ внешних источников. Анализ поисковых<br>запросов</h4>
							<p class="b-subtitle slider-anim duration500 fadeDown delay400"><b>Вы получаете:</b></p>
							<div class="b-pdfs slider-anim duration500 fadeDown delay500">
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
								<div class="b-pdf">
									<img src="i/9/doc.jpg" alt="">
									<small>Название<br>документа</small>
								</div>
							</div>
						</div>
						<div class="b-ipad"></div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="b b-10">
			<div class="b-block">
				<h2>Вы получите <b>Road map</b> по вашему проекту на 3-й неделе работы</h2>
				<p>Так вы сможете планировать свое время и четко понимать, когда и какие ресурсы понадобятся. В результате взаимодействие идет в 2-3 раза эффективнее</p>
				<div class="b-timetable-cont clearfix">
					<div class="b-legend left anim legendAnim" data-cont=".b-timetable-cont">
						<div class="b-legend__item">
							<span style="background: #92e0f1;">Этап 1</span>
							<h4>Большое Исследование</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #f192a8;">Этап 2</span>
							<h4>Стратегия и поиск идеи</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #a6d678;">Этап 3</span>
							<h4>Разработка УТП. Формулировка ключевых посылов. Big Idea</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #83c840;">Этап 4</span>
							<h4>Написание продающих текстов. Прототипирование</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #f9d875;">Этап 5</span>
							<h4>Сбор обратной связи от Целевой Аудитории. Фильтр для лучших гипотез</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #f9b075;">Этап 6</span>
							<h4>Разработка рекламных кампание по необходимым каналам</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #d3bbff;">Этап 7</span>
							<h4>Фотосъемка и видеосъемка</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #62d2ea;">Этап 8</span>
							<h4>Разработка продающего дизайна</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #f96486;">Этап 9</span>
							<h4>Кроссбраузерная верстка. Мобильная версия</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #d282fb;">Этап 10</span>
							<h4>Программирование. Интеграция CRM, E-mail, SMS-маркетинга и чат-ботов</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #54ab1a;">Этап 11</span>
							<h4>Поэтапный запуск рекламных</h4>
						</div>
						<div class="b-legend__item">
							<span style="background: #fd8728;">Этап 12</span>
							<h4>А/В-тестирование, поддержка и оптимизация системы</h4>
						</div>
					</div>
					<div class="b-note b-timetable right">
						<div class="b-lessons anim lessonsAnim" data-cont=".b-timetable-cont">
							<div class="b-lesson" style="background: #92e0f1;"></div>
							<div class="b-lesson" style="background: #f192a8;"></div>
							<div class="b-lesson" style="background: #a6d678;"></div>
							<div class="b-lesson" style="background: #83c840;"></div>
							<div class="b-lesson" style="background: #f9d875;"></div>
							<div class="b-lesson" style="background: #f9b075;"></div>
							<div class="b-lesson" style="background: #d3bbff;"></div>
							<div class="b-lesson" style="background: #62d2ea;"></div>
							<div class="b-lesson" style="background: #f96486;"></div>
							<div class="b-lesson" style="background: #d282fb;"></div>
							<div class="b-lesson" style="background: #54ab1a;"></div>
							<div class="b-lesson" style="background: #fd8728;"></div>
						</div>
						<div class="b-timetable-shadow"></div>
						<div class="b-note-shadow"></div>
					</div>
				</div>
				<div class="b-check" data-enllax-ratio=".12" data-enllax-type="foreground"></div>
			</div>
		</div>
		<div class="b b-11 black">
			<div class="b-block">
				<h2>Дело не только в <b>четкой последовательности шагов</b></h2>
				<h3>Иначе мы просто предлагали разработку таких Road Map</h3>
				<div class="b-best">
					<div class="b-ipad anim fadeRight"></div>
					<h3><b class="orange">Мы анализируем результаты</b> каждого этапа, тестируем варианты. По итогам на ходу меняем стратегию, чтобы схема работала ещё лучше.<br><br><b class="orange">Потому что нам не всё равно</b> — мы работаем, чтобы создать лучший проект в вашей сфере бизнеса.</h3>
					<a href="#b-quiz-popup" class="b-btn b-green-btn b-quiz-link" id="b-quiz-road-map"><span>Хочу лучший проект</span></a>
				</div>
			</div>
		</div>
		<div class="b b-12 black">
				<div class="b-block">
				<h2>Каждый третий клиент приходит к нам по <b>примерам работ</b></h2>
				<h3 class="b-counter">Кейс <span>1</span> из <div>7</div></h3>
			</div>
			<div class="b-works-slider">
				<div class="b-works-slide">
					<div class="b-block">
						<div class="b-text">
							<h3 class="slider-anim duration500 fadeDown"><b>Привлекли</b> Транснефть, Крост&nbsp;и&nbsp;свыше 140 млн рублей<br> с помощью 1-го Landing Page</h3>
							<img class="slider-anim duration500 fadeDown" src="i/17/logo-1.jpg" style="position: absolute; right: 120px; top: -16px;">
							<p class="slider-anim duration500 fadeDown delay200">Провели глубокий анализ 9 целевых аудиторий.<br> 4 рабочих дня мы провели в офисе Клиента, чтобы изучить компанию и разговаривать с аудиторией на профессиональном языке.<br><br> Разработали 4 концепции прототипа. Донесли преимущества через подход к работе, организовав фото- и видеосъемку этапов работ. Premium-дизайн позволил привлекать самых платежеспособных и интересных Заказчиков.<br><br> В результате группа инженеров стала очень конкурентоспособной компанией, выиграла целый ряд тендеров.
 							</p>
 							<div class="slider-anim duration500 fadeDown delay200 slider-logo-text" style="right: 153px; top: 57px; text-align: center;">Освещение элитной<br> недвижимости</div>
							<!-- <h4 class="slider-anim duration500 fadeDown delay400"><a href="#">Читать кейс полностью</a></h4> -->
						</div>
						<div class="b-img" style="background-image: url('i/17/macbook-1-b.jpg');"></div>
					</div>
				</div>
				<div class="b-works-slide">
					<div class="b-block">
						<div class="b-text">
							<h3 class="slider-anim duration500 fadeDown"><b>Создали</b> систему привлечения<br> клиентов из 3-х Landing Page<br> и вдохнули в бренд новую жизнь</h3>
							<img class="slider-anim duration500 fadeDown" src="i/17/logo-2.jpg" style="position: absolute; right: 260px; top: 5px;">
							<p class="slider-anim duration500 fadeDown delay200">«Не было ни одного дня без клиентов» — говорит Заказчик. Запустили мультилендинги, quiz, e-mail рассылку и оформили социальные сети. Ежемесячно оптимизируем таргетированную и контекстную рекламу.<br><br> Один из самых ярких наших проектов! Создали мощную платформу для бренда 2D School. Невероятный сайт, логотип, продающее видео. И самое главное — ежедневно эта система приносит прибыль.
 							</p>
 							<div class="slider-anim duration500 fadeDown delay200 slider-logo-text" style="right: 96px; top: 21px; text-align: left;">Школа современных<br> танцев для детей</div>
							<!-- <h4 class="slider-anim duration500 fadeDown delay400"><a href="#">Читать кейс полностью</a></h4> -->
						</div>
						<div class="b-img" style="background-image: url('i/17/macbook-2-b.jpg');"></div>
					</div>
				</div>
				<div class="b-works-slide">
					<div class="b-block">
						<div class="b-text">
							<h3 class="slider-anim duration500 fadeDown"><b>Увеличили</b> прибыль на 290%, так&nbsp;что&nbsp;заказчику пришлось нанять целый штат из 10 мастеров</h3>
							<img class="slider-anim duration500 fadeDown" src="i/17/logo-3.jpg" style="position: absolute; right: 170px; top: -2px;">
							<p class="slider-anim duration500 fadeDown delay200">Разработали мультилендинг более чем со 150 вариациями подстройки под запрос. Запустили свыше 40 рекламных кампаний в Яндекс Директ и Google Adwords. Сегментировали запросы по брендам, целевым и околоцелевым. <br><br>Интегрировали сайт с Bitrix24, так что 100% заявок без потерь попадают в воронку продаж. Автоматическая постановка задачи менеджерам при поступлении новых заявок с сайта.<br><br>Провели 6 полноценных А/В-тестов сайта, что позволило увеличить прибыль на 290% за 2&nbsp;месяца после запуска сайта.
 							</p>
 							<div class="slider-anim duration500 fadeDown delay200 slider-logo-text" style="right: 146px; top: 57px; text-align: center;">Немецкий чип-тюнинг<br> в Москве</div>
							<!-- <h4 class="slider-anim duration500 fadeDown delay400"><a href="#">Читать кейс полностью</a></h4> -->
						</div>
						<div class="b-img" style="background-image: url('i/17/macbook-3-b.jpg');"></div>
					</div>
				</div>
				<div class="b-works-slide">
					<div class="b-block">
						<div class="b-text">
							<h3 class="slider-anim duration500 fadeDown"><b>Создали</b> систему привлечения<br> клиентов из 3-х Landing Page<br> и вдохнули в бренд новую жизнь</h3>
							<img class="slider-anim duration500 fadeDown" src="i/17/logo-4.jpg" style="position: absolute; right: 250px; top: 0px;">
							<p class="slider-anim duration500 fadeDown delay200">«Не было ни одного дня без клиентов» — говорит Заказчик. Запустили мультилендинги, quiz, e-mail рассылку и оформили социальные сети. Ежемесячно оптимизируем таргетированную и контекстную рекламу.<br><br> Один из самых ярких наших проектов! Создали мощную платформу для бренда 2D School. Невероятный сайт, логотип, продающее видео. И самое главное — ежедневно эта система приносит прибыль.
 							</p>
 							<div class="slider-anim duration500 fadeDown delay200 slider-logo-text" style="right: 130px; top: 15px; text-align: left;">Языковая<br> школа в Москве</div>
							<!-- <h4 class="slider-anim duration500 fadeDown delay400"><a href="#">Читать кейс полностью</a></h4> -->
						</div>
						<div class="b-img" style="background-image: url('i/17/macbook-4-b.jpg');"></div>
					</div>
				</div>
				<div class="b-works-slide">
					<div class="b-block">
						<div class="b-text">
							<h3 class="slider-anim duration500 fadeDown">Увеличили</b> прибыль на 290%, так&nbsp;что&nbsp;заказчику пришлось нанять целый штат из 10 мастеров</h3>
							<img class="slider-anim duration500 fadeDown" src="i/17/logo-5.jpg" style="position: absolute; right: 173px; top: -18px;">
							<p class="slider-anim duration500 fadeDown delay200">Разработали мультилендинг более чем со 150 вариациями подстройки под запрос. Запустили свыше 40 рекламных кампаний в Яндекс Директ и Google Adwords. Сегментировали запросы по брендам, целевым и околоцелевым. <br><br>Интегрировали сайт с Bitrix24, так что 100% заявок без потерь попадают в воронку продаж. Автоматическая постановка задачи менеджерам при поступлении новых заявок с сайта.<br><br>Провели 6 полноценных А/В-тестов сайта, что позволило увеличить прибыль на 290% за 2&nbsp;месяца после запуска сайта.
 							</p>
 							<div class="slider-anim duration500 fadeDown delay200 slider-logo-text" style="right: 154px; top: 78px; text-align: center;">Комплексное<br> ипотечное страхование</div>
							<!-- <h4 class="slider-anim duration500 fadeDown delay400"><a href="#">Читать кейс полностью</a></h4> -->
						</div>
						<div class="b-img" style="background-image: url('i/17/macbook-5-b.jpg');"></div>
					</div>
				</div>
				<div class="b-works-slide">
					<div class="b-block">
						<div class="b-text">
							<h3 class="slider-anim duration500 fadeDown"><b>Создали</b> систему привлечения<br> клиентов из 3-х Landing Page<br> и вдохнули в бренд новую жизнь</h3>
							<img class="slider-anim duration500 fadeDown" src="i/17/logo-6.jpg" style="position: absolute; right: 251px; top: -6px;">
							<p class="slider-anim duration500 fadeDown delay200">«Не было ни одного дня без клиентов» — говорит Заказчик. Запустили мультилендинги, quiz, e-mail рассылку и оформили социальные сети. Ежемесячно оптимизируем таргетированную и контекстную рекламу.<br><br> Один из самых ярких наших проектов! Создали мощную платформу для бренда 2D School. Невероятный сайт, логотип, продающее видео. И самое главное — ежедневно эта система приносит прибыль.
 							</p>
 							<div class="slider-anim duration500 fadeDown delay200 slider-logo-text" style="right: 106px; top: 17px; text-align: left;">Оптовая продажа<br> сублимированного<br> растворимого<br> кофе</div>
							<!-- <h4 class="slider-anim duration500 fadeDown delay400"><a href="#">Читать кейс полностью</a></h4> -->
						</div>
						<div class="b-img" style="background-image: url('i/17/macbook-6-b.jpg');"></div>
					</div>
				</div>
				<div class="b-works-slide">
					<div class="b-block">
						<div class="b-text">
							<h3 class="slider-anim duration500 fadeDown"><b>Увеличили</b> прибыль на 290%, так&nbsp;что&nbsp;заказчику пришлось нанять целый штат из 10 мастеров</h3>
							<img class="slider-anim duration500 fadeDown" src="i/17/logo-5.jpg" style="position: absolute; right: 173px; top: -18px;">
							<p class="slider-anim duration500 fadeDown delay200">Разработали мультилендинг более чем со 150 вариациями подстройки под запрос. Запустили свыше 40 рекламных кампаний в Яндекс Директ и Google Adwords. Сегментировали запросы по брендам, целевым и околоцелевым. <br><br>Интегрировали сайт с Bitrix24, так что 100% заявок без потерь попадают в воронку продаж. Автоматическая постановка задачи менеджерам при поступлении новых заявок с сайта.<br><br>Провели 6 полноценных А/В-тестов сайта, что позволило увеличить прибыль на 290% за 2&nbsp;месяца после запуска сайта.
 							</p>
 							<div class="slider-anim duration500 fadeDown delay200 slider-logo-text" style="right: 128px; top: 79px; text-align: center;">Организация и страхование<br> родов</div>
							<!-- <h4 class="slider-anim duration500 fadeDown delay400"><a href="#">Читать кейс полностью</a></h4> -->
						</div>
						<div class="b-img" style="background-image: url('i/17/macbook-7-b.jpg');"></div>
					</div>
				</div>
			</div>
<!-- 			<div class="b-block">
				<h2><b>За счет такого подхода,</b> клиенты не только доверяют проект,</h2>
				<h3>но и становятся нашими друзьями</h3>
			</div>
			<div class="b-reviews-slider">
				<div class="b-reviews-slide">
					<div class="b-block">
						<div class="b-review clearfix">
							<div class="b-video-cont left">
								<div class="b-video">
									<div class="b-video-button" data-fancybox data-type="iframe" data-src="https://www.youtube.com/embed/bpQEITtPlq0?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1">
										<span></span>
									</div>
								</div>
								<p><span>#</span><b>На встрече. Обсуждаем результаты 4-го месяца проекта</b> / 20.04.2018</p>
							</div>
							<div class="b-text left">
								<h3 class="b-quotes">У TFA недешево, но в следующий раз я опять пойду к ним, даже если будет в 2 раза дороже</h3>
								<h4>До тех пор пока я не обратился к ребятам из TFA у меня была проблема с количеством клиентов с сайта. Сайт был, но не работал. Теперь клиентов стало настолько много, что мы не успеваем обрабатывать заявки. Поэтому ближайшая цель – найм дополнительных сотрудников.</h4>
								<div class="b-author clearfix">
									<div class="b-img" style="background-image: url('i/12/man.jpg');"></div>
									<div class="b-author-text">
										<p><strong>Арсений Валеев</strong></p>
										<small>Директор, ТРАНССИММАШ</small>
									</div>
									<img src="i/12/sign.svg" alt="">
								</div>
							</div>
						</div>
						<div class="b-review-indexes justify">
							<div class="b-review-index icon-pyramid">
								<p><strong>37%</strong></p>
								<small>конверсия</small>
							</div>
							<div class="b-review-index icon-rub">
								<p><strong>25₽</strong></p>
								<small>цена лида</small>
							</div>
							<div class="b-review-index icon-finger">
								<p><strong>&#60;30</strong></p>
								<small>заявок с сайта</small>
							</div>
							<div class="b-review-index icon-pyramid">
								<p><strong>37%</strong></p>
								<small>конверсия</small>
							</div>
							<div class="b-review-index icon-rub">
								<p><strong>25₽</strong></p>
								<small>цена лида</small>
							</div>
							<div class="b-review-index icon-finger">
								<p><strong>&#60;30</strong></p>
								<small>заявок с сайта</small>
							</div>
						</div>
					</div>
				</div>
				<div class="b-reviews-slide">
					<div class="b-block">
						<div class="b-review clearfix">
							<div class="b-video-cont left">
								<div class="b-video">
									<div class="b-video-button" data-fancybox data-type="iframe" data-src="https://www.youtube.com/embed/bpQEITtPlq0?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1">
										<span></span>
									</div>
								</div>
								<p><span>#</span><b>На встрече. Обсуждаем результаты 4-го месяца проекта</b> / 20.04.2018</p>
							</div>
							<div class="b-text left">
								<h3 class="b-quotes">У TFA недешево, но в следующий раз я опять пойду к ним, даже если будет в 2 раза дороже</h3>
								<h4>До тех пор пока я не обратился к ребятам из TFA у меня была проблема с количеством клиентов с сайта. Сайт был, но не работал. Теперь клиентов стало настолько много, что мы не успеваем обрабатывать заявки. Поэтому ближайшая цель – найм дополнительных сотрудников.</h4>
								<div class="b-author clearfix">
									<div class="b-img" style="background-image: url('i/12/man.jpg');"></div>
									<div class="b-author-text">
										<p><strong>Арсений Валеев</strong></p>
										<small>Директор, ТРАНССИММАШ</small>
									</div>
									<img src="i/12/sign.svg" alt="">
								</div>
							</div>
						</div>
						<div class="b-review-indexes justify">
							<div class="b-review-index icon-pyramid">
								<p><strong>37%</strong></p>
								<small>конверсия</small>
							</div>
							<div class="b-review-index icon-rub">
								<p><strong>25₽</strong></p>
								<small>цена лида</small>
							</div>
							<div class="b-review-index icon-finger">
								<p><strong>&#60;30</strong></p>
								<small>заявок с сайта</small>
							</div>
							<div class="b-review-index icon-pyramid">
								<p><strong>37%</strong></p>
								<small>конверсия</small>
							</div>
							<div class="b-review-index icon-rub">
								<p><strong>25₽</strong></p>
								<small>цена лида</small>
							</div>
							<div class="b-review-index icon-finger">
								<p><strong>&#60;30</strong></p>
								<small>заявок с сайта</small>
							</div>
						</div>
					</div>
				</div>
				<div class="b-reviews-slide">
					<div class="b-block">
						<div class="b-review clearfix">
							<div class="b-video-cont left">
								<div class="b-video">
									<div class="b-video-button" data-fancybox data-type="iframe" data-src="https://www.youtube.com/embed/bpQEITtPlq0?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1">
										<span></span>
									</div>
								</div>
								<p><span>#</span><b>На встрече. Обсуждаем результаты 4-го месяца проекта</b> / 20.04.2018</p>
							</div>
							<div class="b-text left">
								<h3 class="b-quotes">У TFA недешево, но в следующий раз я опять пойду к ним, даже если будет в 2 раза дороже</h3>
								<h4>До тех пор пока я не обратился к ребятам из TFA у меня была проблема с количеством клиентов с сайта. Сайт был, но не работал. Теперь клиентов стало настолько много, что мы не успеваем обрабатывать заявки. Поэтому ближайшая цель – найм дополнительных сотрудников.</h4>
								<div class="b-author clearfix">
									<div class="b-img" style="background-image: url('i/12/man.jpg');"></div>
									<div class="b-author-text">
										<p><strong>Арсений Валеев</strong></p>
										<small>Директор, ТРАНССИММАШ</small>
									</div>
									<img src="i/12/sign.svg" alt="">
								</div>
							</div>
						</div>
						<div class="b-review-indexes justify">
							<div class="b-review-index icon-pyramid">
								<p><strong>37%</strong></p>
								<small>конверсия</small>
							</div>
							<div class="b-review-index icon-rub">
								<p><strong>25₽</strong></p>
								<small>цена лида</small>
							</div>
							<div class="b-review-index icon-finger">
								<p><strong>&#60;30</strong></p>
								<small>заявок с сайта</small>
							</div>
							<div class="b-review-index icon-pyramid">
								<p><strong>37%</strong></p>
								<small>конверсия</small>
							</div>
							<div class="b-review-index icon-rub">
								<p><strong>25₽</strong></p>
								<small>цена лида</small>
							</div>
							<div class="b-review-index icon-finger">
								<p><strong>&#60;30</strong></p>
								<small>заявок с сайта</small>
							</div>
						</div>
					</div>
				</div>
				<div class="b-reviews-slide">
					<div class="b-block">
						<div class="b-review clearfix">
							<div class="b-video-cont left">
								<div class="b-video">
									<div class="b-video-button" data-fancybox data-type="iframe" data-src="https://www.youtube.com/embed/bpQEITtPlq0?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1">
										<span></span>
									</div>
								</div>
								<p><span>#</span><b>На встрече. Обсуждаем результаты 4-го месяца проекта</b> / 20.04.2018</p>
							</div>
							<div class="b-text left">
								<h3 class="b-quotes">У TFA недешево, но в следующий раз я опять пойду к ним, даже если будет в 2 раза дороже</h3>
								<h4>До тех пор пока я не обратился к ребятам из TFA у меня была проблема с количеством клиентов с сайта. Сайт был, но не работал. Теперь клиентов стало настолько много, что мы не успеваем обрабатывать заявки. Поэтому ближайшая цель – найм дополнительных сотрудников.</h4>
								<div class="b-author clearfix">
									<div class="b-img" style="background-image: url('i/12/man.jpg');"></div>
									<div class="b-author-text">
										<p><strong>Арсений Валеев</strong></p>
										<small>Директор, ТРАНССИММАШ</small>
									</div>
									<img src="i/12/sign.svg" alt="">
								</div>
							</div>
						</div>
						<div class="b-review-indexes justify">
							<div class="b-review-index icon-pyramid">
								<p><strong>37%</strong></p>
								<small>конверсия</small>
							</div>
							<div class="b-review-index icon-rub">
								<p><strong>25₽</strong></p>
								<small>цена лида</small>
							</div>
							<div class="b-review-index icon-finger">
								<p><strong>&#60;30</strong></p>
								<small>заявок с сайта</small>
							</div>
							<div class="b-review-index icon-pyramid">
								<p><strong>37%</strong></p>
								<small>конверсия</small>
							</div>
							<div class="b-review-index icon-rub">
								<p><strong>25₽</strong></p>
								<small>цена лида</small>
							</div>
							<div class="b-review-index icon-finger">
								<p><strong>&#60;30</strong></p>
								<small>заявок с сайта</small>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<div class="b b-13 black">
			<div class="b-block">
				<h2><b>Это работает</b> во всех областях</h2>
				<h3>Мы уверены, потому что с 2013 года мы и наши ученики проработали более 90 сфер бизнеса</h3>
			</div>
			<div class="b-kind-slider">
				<div class="b-kind-slide">
					<div class="b-block">
						<div class="b-kind-list">
							<h3>А</h3>
							<h4>
								1. Агентство интернет-маркетинга<br>
								2. Агентство Недвижимости №1 в Ярославле<br>
								3. Аналитический сервис<br>
								4. Английский язык<br>
								5. Архитектурное освещение
							</h4>
							<h3>Б</h3>
							<h4>
								6. Бензиновые электрогенераторы<br>
								7. Бизнес-тренинги Интенсив и Цех от БМ<br>
								8. Боксы в кузов для пикапов (физ. товар)<br>
								9. Брендирование транспорта
							</h4>
						</div>
						<div class="b-kind-list">
							<h4>
								10. Бухгалтерское обслуживание
							</h4>
							<h3>В</h3>
							<h4>
								11. Видеонаблюдение<br>
								12. Винтовые сваи
							</h4>
							<h3>Г</h3>
							<h4>
								13. Газовые электрогенераторы
							</h4>
							<h3>Д</h3>
							<h4>
								14. Дизайн-проекты домов и квартир<br>
								15. Дизайн-проекты квартир<br>
								16. Дополнительное оборудование для авто<br>
								17. Допуски СРО
							</h4>
						</div>
						<div class="b-kind-list">
							<h4>
								18. Доставка здоровой еды
							</h4>
							<h3>И</h3>
							<h4>
								19. Изготовление портретов-картин по фото<br>
								20. Инновация для нефтяной промышленности<br>
								21. Интернет-магазин фармацевтических товаров
							</h4>
							<h3>К</h3>
							<h4>
								22. Кольцевые лампы<br>
								23. Контейнерные поставки комплектующих из Китая<br>
								24. Криптовалютная биржа
							</h4>
						</div>
					</div>
				</div>
				<div class="b-kind-slide">
					<div class="b-block">
						<div class="b-kind-list">
							<h4>
								25. Курсы игры на гитаре<br>
								26. Кухни
							</h4>
							<h3>Л</h3>
							<h4>
								27. Лига финансовых консультантов<br>
								28. Ликвидация ООО<br>
								29. Логистика
							</h4>
							<h3>М</h3>
							<h4>
								30. Мебельные туры в Китай<br>
								31. Международный сервис для логистов (IT-проект)<br>
								32. Мужской тренинг
							</h4>
						</div>
						<div class="b-kind-list">
							<h3>H</h3>
							<h4>
								33. Натяжные потолки
							</h4>
							<h3>О</h3>
							<h4>
								34. Обучение заработку на госзакупках<br>
								35. Обучение пошиву костюмов класса Люкс<br>
								36. Оклейка автомобилей защитной пленкой<br>
								37. Оклейка автомобилей цветной пленкой<br>
								38. Оптовая продажа кофе<br>
								39. Оптовая продажа морепродуктов<br>
								40. Оптовая продажа светодиодных светильников<br>
							</h4>
						</div>
						<div class="b-kind-list">
							<h4>
								41. Организация VIP-юбилеев
							</h4>
							<h3>П</h3>
							<h4>
								42. Полировка яхт<br>
								43. Поминовения онлайн<br>
								44. Поставка картриджей<br>
								45. Продажа газобетона<br>
								46. Продажа джема<br>
								47. Продажа домов из бруса<br>
								48. Продажа икон ручной работы<br>
								49. Продажа комплексных трансформаторных подстанций<br>
								50. Продажа масла оптом<br>
								51. Продажа оргтехники<br>
								52. Продажа полимеров оптом
							</h4>
						</div>
					</div>
				</div>
				<div class="b-kind-slide">
					<div class="b-block">
						<div class="b-kind-list">
							<h4>
								53. Продажа проставок для увеличения клиренса<br> 
								54. Продажа рыцарских доспехов<br>
								55. Продажа сока алоэ<br>
								56. Продажа стройматериалов оптом<br>
								57. Продажа франшизы барбершопа<br>
								58. Продажа франшизы соляных пещер<br>
								59. Продажа штор в розницу<br>
								60. Продажа щебня<br>
								61. Промо-сайт дизайнерские ванны-диваны<br>
								62. Прототипирование Landing Page
							</h4>
							<h3>Р</h3>
							<h4>
								63. Разработка светодизайна
							</h4>
						</div>
						<div class="b-kind-list">
							<h4>
								64. Регистрация сделок с недвижимостью<br>
								65. Ремонт ванных комнат<br>
								66. Ремонт квартир<br>
								67. Ремонт тракторов
							</h4>
							<h3>С</h3>
							<h4>
								68. Сайт для кафе<br>
								69. Сбор пожертвований на храмы<br>
								70. Сервис по подбору квартир<br>
								71. Сервис по привлечению инвестиций в стартапы<br>
								72. Сервис по привлечению специалистов в стартапы<br>
								73. Сервис по ремонту техники Apple<br>

							</h4>
						</div>
						<div class="b-kind-list">
							<h4>
								74. Cервис по ремонту газелей<br>
								75. Соляные пещеры<br>
								76. Стоматологические боры<br>
								77. Страхование родов для Спасских Ворот<br>
								78. Студия видео-записи классической музыки
							</h4>
							<h3>Т</h3>
							<h4>
								79. Торговое освещение<br>
								80. Тренинг по финансовой грамотности<br>
								81. Туры в Крым
							</h4>
						</div>
					</div>
				</div>
				<div class="b-kind-slide">
					<div class="b-block">
						<div class="b-kind-list">
							<h3>У</h3>
							<h4>
								82. Уроки сольфеджио
								83. Услуга по развитию отдела продаж<br>
								84. Услуги web-разработки<br>
								85. Услуги по разработке IT-решений<br>
								86. Утепление домов 
							</h4>
							<h3>Ф</h3>
							<h4>
								87. Фильтры для воды<br>
								88. Финансовый консультант<br>
								89. Франшиза курсов по подготовке к ЕГЭ<br>
								90. Франшизы по продаже автосвета<br>
								91. Франшизы по регулированию вывесок на домах "Законная вывеска"
							</h4>
							
						</div>
						<div class="b-kind-list">
							<h3>Ч</h3>
							<h4>
								92. Частные детские садики<br>
								93. Частный психолог<br>
								94. Чип-тюнинг
							</h4>
							<h3>Ш</h3>
							<h4>
								95. Шкафы-купе<br>
								96. Школа английского языка для детей<br>
								97. Школа вокала<br>
								98. Школа парных танцев для взрослых<br>
								99. Школа танцев для детей
							</h4>
							<h3>Э</h3>
							<h4>
								100. Электропроектирование
							</h4>
						</div>
						<div class="b-kind-list">
							<h3>A-Z</h3>
							<h4>
								101. CRM для социальных сетей<br>
								102. EMS-тренажеры<br>
								103. Excel-файл воронки продаж<br>
								104. HR-услуги<br>
								105. SMM-агентство<br>
								106. Uber. Подключение водителей (№1 в СПб)
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b b-14">
			<div class="b-block">
				<div class="b-directors">
					<div class="b-director clearfix">
						<div class="b-director-desc b-director-desc-1 left">
							<p class="anim fadeLeft"><b>Роман Твердохлеб</b></p>
							<h4 class="anim fadeLeft delay200">Сооснователь агентства<br>интернет-маркетинга TFA</h4>
						</div>
						<div class="b-director-text right b-director-text-1">
							<h2><b>Скорее всего,</b> через полгода вы решите запускать с нами ещё одно направление</h2>
							<h3>Это не хвастовство. <b>Каждый второй клиент видит результаты системы и тут же обращается к нам снова.</b></h3>
							<h3>Например, закончили проект по автосервисам — и сразу начинаем разрабатывать систему под оптовую продажу машинного масла.</h3>
							<h3>Или упаковали оптовую продажу кофе, а теперь работаем над их проектом по франшизе.</h3>
							<h3><b>Клиенты от нас не уходят.</b></h3>
						</div>
					</div>
					<div class="b-director clearfix">
						<div class="b-director-text left b-director-text-2">
							<h2><b>Цена полной 6-месячной трансформации</b> <span class="b-svg-rubles"></span> начинается от 590 т. р.</h2>
							<h3>Многие с лёгкостью инвестируют в оборудование. Хотя оно стоит дороже, окупается много лет, требует затрат на обучение и обслуживание.</h3>
							<h3>В маркетинг вы вложитесь один раз. <b>Окупите инвестиции через полгода</b> и следующие 3-5 лет будете <b>получать прибыль на 60-290% выше.</b></h3>
							<h3>Всё, что нужно делать — обеспечивать систему «топливом» — бюджетом на рекламу.</h3>
						</div>
						<div class="b-director-desc b-director-desc-2 left">
							<p class="anim fadeRight"><b>Владимир Сургай</b></p>
							<h4 class="anim fadeRight delay200">Основатель агентства<br>интернет-маркетинга TFA</h4>
							<div class="b-check" data-enllax-ratio=".12" data-enllax-type="foreground"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="b-white-back">
				<div class="b-block">
					<div class="b-note-svg b-line-form">
						<div class="b-img"></div>
						<h2><b>Узнайте</b> точную стоимость вашего проекта</h2>
						<p>Ответьте на несколько вопросов. Вы получите 3 варианта по ценам в ближайшие день-два</p>
						<form action="thanks.php" method="POST" class="email-form">
							<div class="b-line-input clearfix">
								<input type="text" name="email" class="b-email-input" placeholder="Введите ваш E-mail" required>
								<a href="#b-quiz-popup" class="b-btn b-green-btn b-quiz-link"><span>Узнать стоимость</span></a>
							</div>
							<input type="hidden" name="subject" value="Заявка с формы «Узнайте точную стоимость вашего проекта»">
							<input type="hidden" name="thanks" value="request">
							<a href="#b-popup-success" class="b-quiz-link fancy" style="display:none;"></a>
							<small>Нажимая на кнопку, вы даете согласие на обработку своих персональных<br>данных и соглашаетесь с <a href="#">Политикой конфиденциальности</a></small>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="b b-15">
			<div class="b-block">
				<div class="b-blank" data-enllax-ratio=".1" data-enllax-type="foreground"></div>
				<div class="b-pen" data-enllax-ratio=".2" data-enllax-type="foreground"></div>
				<div class="b-text" data-offset="400">
					<h2><b>Вы будете спокойны</b> за каждый рубль</h2>
					<div class="b-item icon-mail anim fadeDown" data-cont=".b-15 .b-text">
						<h3>Раз в неделю получаете отчет</h3>
						<p>по деньгам, процессам, срокам, реализованным этапам</p>
					</div>
					<div class="b-item icon-rub anim fadeDown delay200" data-cont=".b-15 .b-text">
						<h3>Платите по удобному графику</h3>
						<p>Например, можем разделить сумму на 3-6 платежей</p>
					</div>
					<div class="b-item icon-screen-vertical anim fadeDown delay400" data-cont=".b-15 .b-text">
						<h3>Все зафиксировано в <b><a href="https://drive.google.com/file/d/1Y_JJcRlT4sMCIJqNNzGzG5uQ5-2D9zAP/view?usp=sharing" target="_blank">договоре</a></b></h3>
						<p>Точнее, в приложении к нему. Мы прописываем каждый этап, его сроки и результаты</p>
					</div>
					<!-- <div class="b-docs">
						<small class="b-doc anim fadeDown delay500" data-cont=".b-15 .b-text">
							<a href="#"><span>Смотреть</span><br><span>пример отчета</span></a>
							<span>PDF, 6,2 Мб</span>
						</small>
						<small class="b-doc anim fadeDown delay600" data-cont=".b-15 .b-text">
							<a href="#"><span>Смотреть</span><br><span>пример договора</span></a>
							<span>PDF, 6,2 Мб</span>
						</small>
					</div> -->
				</div>
				<div class="b-strong-price">
					<h3><b>Цена железная, доплачивать не придется</b></h3>
					<p>Только если вы решите внести что-то, чего не было в договоре.<br>Например, всё-таки согласитесь, что вам нужна профессиональная фотосъемка, а раньше считали, что обойдетесь тем, что есть</p>
				</div>
			</div>
		</div>
		<div class="b b-16">
			<div class="b-block">
				<div class="b-note-svg b-line-form">
					<div class="b-img"></div>
					<div class="b-woman"></div>
					<p class="b-quotes">Ответьте на несколько вопросов —  и получите <b>индивидуальное коммерческое предложение</b></p>
					<h2><b>Три варианта</b> по составу инструментов, срокам и цене</h2>
					<p>Это вас ни к чему не обязывает. Получив наше предложение, вы сможете примерить его на свой бизнес</p>
					<form action="thanks.php" method="POST" class="email-form">
						<div class="b-line-input clearfix">
							<input type="text" name="email" class="b-email-input" placeholder="Введите ваш E-mail" required>
							<a href="#b-quiz-popup" class="b-btn b-green-btn b-quiz-link"><span>Получить предложение</span></a>
						</div>
						<input type="hidden" name="subject" value="Заявка с формы «Ответьте на несколько вопросов — и получите индивидуальное коммерческое предложение»">
						<input type="hidden" name="thanks" value="request">
						<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
						<small>Нажимая на кнопку, вы даете согласие на обработку своих персональных<br>данных и соглашаетесь с <a href="#">Политикой конфиденциальности</a></small>
					</form>
				</div>
			</div>
		</div>
<!-- 		<div class="b b-17">
		</div> -->
		<!-- <div class="b b-18">
			<div class="b-block">
				<h2>Такие результаты не случайны. От вас нужна <b>включенность в процесс</b></h2>
				<h3>Как только бьём по рукам — будем с вами очень плотно работать. Это значит, что от вас нужны, как минимум:</h3>
				<div class="b-three-items">
					<div class="b-three-item anim fadeDown">
						<div class="b-img" style="background-image: url('i/18/photo-1.jpg');"></div>
						<div class="b-text">
							<p><b>Время на бриф</b></p>
							<h4>Это 3-4 часа общения с нашими специалистами и дальшейшие уточнения</h4>
						</div>
					</div>
					<div class="b-three-item anim fadeDown delay200">
						<div class="b-img" style="background-image: url('i/18/photo-2.jpg');"></div>
						<div class="b-text">
							<p><b>Доступ для фотографов</b></p>
							<h4>и видеооператоров. Причем не только доступ, но и подготовка объектов съемки</h4>
						</div>
					</div>
					<div class="b-three-item anim fadeDown delay400">
						<div class="b-img" style="background-image: url('i/18/photo-3.jpg');"></div>
						<div class="b-text">
							<p><b>Экспертность</b></p>
							<h4>для создания полезных материалов, проверки фактов и передачи опыта</h4>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="b b-19">
			<div class="b-block">
				<p class="b-first-p">Нам интересно делать только wow-кейсы. Мы всей командой<br>буквально пашем ради этого. <strong>Поэтому берем только 9-10 проектов в год</strong></p>
				<h3><b>В этом месяце мы можем взять 1 проект</b></h3>
				<!-- <h3><b>В этом месяце у нас нет свободных мест</b></h3> -->
				<div class="b-three-items b-projects">
					<div class="b-three-item anim fadeDown">
						<div class="b-img" style="background-image: url('i/19/photo-2.jpg');">
							<h3><b>«ENSOL GROUP»</b></h3>
							<div class="b-bottom-text">
								<h4>ниша</h4>
								<p>цифровое видеонаблюдение, охранные системы</p>
							</div>
						</div>
					</div>
					<!-- <div class="b-three-item anim fadeDown delay200">
						<div class="b-img" style="background-image: url('i/19/photo-1.jpg');">
							<h3><b>Компания «Константин Петропавловский»</b></h3>
							<div class="b-bottom-text">
								<h4>ниша</h4>
								<p>строительство частных и загородных  домов</p>
							</div>
						</div>
					</div> -->
					<div class="b-three-item anim fadeDown delay200 b-new-project">
						<h3><b>Место для<br>вашего проекта</b></h3>
						<a href="#" class="b-btn b-green-btn b-go" data-block=".b-20" data-offset="-50"><span>Забронировать!</span></a>
					</div>
					<div class="b-three-item anim fadeDown delay400">
						<div class="b-img" style="background-image: url('i/19/photo-4.jpg');">
							<h3><b>«LinguaCat»</b></h3>
							<div class="b-bottom-text">
								<h4>ниша</h4>
								<p>школа иностранных<br> языков для детей</p>
							</div>
						</div>
					</div>
				</div>
				<div class="b-circle" data-enllax-ratio=".12" data-enllax-type="foreground"></div>
			</div>
		</div>
		<div class="b b-20">
			<div class="b-block">
				<h2><b>Забронируйте место,</b> чтобы увеличить прибыль на 60-290% раз уже через полгода</h2>
				<div class="clearfix">
					<div class="b-text anim fadeDown left" data-offset="500">
						<p>После запуска сайт компании 500lux.ru привлек <strong>свыше 140 000 000 рублей,</strong><br> в том числе заказы от таких компаний как Транснефть, Крост, КД Аристократ и других игроков<span class="b-line anim fadeDown delay200" data-cont=".b-20 .b-text"></span></p>
						<div class="b-img anim fadeDown delay400" data-cont=".b-20 .b-text"></div>
					</div>
					<div class="b-note b-vertical-form right">
						<div class="b-border">
							<p>Вам нужно только оставить заявку и немного рассказать о своем бизнесе.</p>
							<p>После этого мы свяжемся с вами, обговорим варианты и <strong>предложим детальный план проекта.</strong></p>
							<form action="thanks.php" method="POST">
								<input type="text" name="name" class="b-name-input" placeholder="Введите имя" required>
								<input type="tel" pattern="\d\d\d\d\d\d\d\d\d\d\d" data-mask="99999999999" class="b-phone-input" name="phone" value="" required="" placeholder="Мобильный телефон с 8">
								<input type="text" name="email" class="b-email-input" placeholder="Введите ваш E-mail" required>
								<a href="#" class="b-btn b-green-btn ajax"><span>Забронировать место</span></a>
								<input type="hidden" name="subject" value="Заявка с формы «Забронируйте место, чтобы увеличить прибыль в 4-6 раз уже через полгода»">
								<input type="hidden" name="thanks" value="request">
								<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
								<small>Нажимая на кнопку, вы даете согласие на обработку своих персональных данных и соглашаетесь с<br><a href="#">Политикой конфиденциальности</a></small>
							</form>
						</div>
						<div class="b-note-shadow"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="b b-21">
			<div class="b-block">
				<div class="clearfix">
					<div class="b-text left">
						<h3>Или <b>задайте вопрос</b><br>прямо сейчас</h3>
						<h4><b>Среднее время ответа:</b> 4 минуты в рабочее время</h4>
					</div>
					<div class="b-soc right">
						<div class="b-soc-buttons">
							<!-- <a href="#" class="b-soc-item b-wa anim fadeDown" target="_blank"></a>
							<a href="#" class="b-soc-item b-ft anim fadeDown delay100" target="_blank"></a> -->
							<a href="https://vk.me/transfiguration.agency" class="b-soc-item b-vk anim fadeDown delay200" target="_blank"></a>
							<a href="https://telegram.me/tfa_transfiguration_bot" class="b-soc-item b-tg anim fadeDown delay300" target="_blank"></a>
						</div>
						<h4>Нажмите на одну из кнопок, чтобы открыть чат с менеджером TFA  в удобном вам мессенджере</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="b b-footer">
			<div class="b-block justify">
				<a href="#" class="b-logo"></a>
				<!-- <div class="b-links">
					<h4><a href="#"><b>Главная</b></a></h4>
					<h4><a href="#"><b>Портфолио</b></a></h4>
					<h4><a href="#"><b>Проекты</b></a></h4>
				</div>
				<div class="b-links">
					<h4><b>Обучение</b></h4>
					<small><a href="#">Название 1</a></small>
					<small><a href="#">Название 2</a></small>
					<small><a href="#">Название 3</a></small>
				</div>
				<div class="b-links">
					<h4><b>Услуги</b></h4>
					<small><a href="#">Система «под ключ»</a></small>
					<small><a href="#">Прототипирование</a></small>
				</div>
				<div class="b-links">
					<h4><a href="#"><b>Вакансии</b></a></h4>
					<h4><a href="#"><b>Блог</b></a></h4>
					<h4><a href="#"><b>Контакты</b></a></h4>
				</div> -->
				<div class="b-links">
					<h4><a href="#"><b>Политика конфендиальности</b></a></h4>
					<small class="b-copyright">© TFA 2018. Все права защищены</small>
				</div>
			</div>
		</div>
	</div>
	<div style="display:none;">
		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<a href="#b-popup-quit" class="b-quit-popup-link fancy"></a>
		<div class="b-popup b-note b-popup-quit" id="b-popup-quit">
			<div class="b-border">
				<div class="b-blanks"></div>
				<p>Жаль, что вы уходите.<br>Но у нас нет цели во что бы то ни стало<br>продать наши услуги.</p>
				<h3><b>Скачайте пошаговый план бесплатно</b> и попробуйте самостоятельно внедрить систему</h3>
				<p>На какой email отправить план?</p>
				<form action="thanks.php" method="POST" data-goal="CALLBACK" method="POST" id="b-form-1" class="email-form">
					<div class="b-popup-form">
						<input type="text" id="email" class="b-email-input" name="email" placeholder="Введите ваш E-mail" required/>
						<input type="hidden" name="subject" value="Заявка с попапа «Жаль, что вы уходите»"/>
						<input type="hidden" name="thanks" value="request">
						<input type="submit" style="display:none;">
						<a href="#b-quiz-popup" class="b-btn b-green-btn b-quiz-link"><span>Скачать план бесплатно</span></a>
						<small>Нажимая на кнопку, вы даете согласие на обработку своих персональных данных и соглашаетесь с<br><a href="#">Политикой конфиденциальности</a></small>
						<a href="#b-popup-success" class="b-thanks-link" style="display:none;"></a>
					</div>
				</form>
			</div>
			<div class="b-note-shadow"></div>
		</div>
		<div class="b-popup b-note b-quiz" id="b-quiz-popup">
			<div class="b-border">
				<div class="b-quiz-line-container">
					<div class="b-quiz-line-green" data-result="12"></div>
				</div>
				<form action="thanks.php" method="POST" id="b-quiz-form">
					<input type="hidden" name="quiz" value="Y">
					<input type="hidden" name="email" id="e-mail-1">
					<div data-number="1" class="b-quiz-container b-quiz-1" data-result="12">
						<h3><b>Отлично!</b><br>
						Для начала расскажите немного о вашей компании:</h3>
						<div class="b-quiz-left-col">
							<div class="b-popup-form">
								<label for="business">Хорошо. У меня бизнес в сфере:</label>
								<select name="type" id="type" data-placeholder="Выберите сферу бизнеса" required>
									<option value=""></option>
									<option value="Сфера услуг (В2С)">Сфера услуг (В2С)</option>
									<option value="Услуги для бизнеса">Услуги для бизнеса</option>
									<option value="Розничная торговля">Розничная торговля</option>
									<option value="Оптовая торговля">Оптовая торговля</option>
									<option value="Сервис/Стартап">Сервис/Стартап</option>
									<option value="Недвижимость">Недвижимость</option>
									<option value="Финансы">Финансы</option>
									<option value="Продажа франшиз">Продажа франшиз</option>
									<option value="Информационный бизнес">Информационный бизнес</option>
									<option value="Производство">Производство</option>
									<option value="Другое">Другое</option>
								</select>
								<!-- <label for="works">Если коротко, то мы:</label>
								<textarea name="works" class="b-quiz-textarea" placeholder="Занимаемся оптовой продажей кофе по России и в страны        Азии с 2014 года. Сейчас хотим запустить франшизу."></textarea> -->
								<label for="site">Вставьте ссылку на ваш сайт или пропустите этот шаг:</label>
								<input type="text" id="site" name="site" placeholder="ссылка на сайт и/или аккаунт в соцсетях" />
								<a href="#" class="b-btn b-green-btn" onclick="return false;"><span>Дальше</span></a>
							</div>
						</div>
						<div class="b-quiz-right-col">
							<p>У нас есть опыт работы с более чем 90 сферами бизнеса.<br><br>
							Расскажите подробнее, чем вы занимаетесь. <br><br>
							<b>Это позволит выстроить цепочку действий</b> на основе нашего опыта в аналогичных проектах.</p>
						</div>
					</div>
					<div data-number="2" class="b-quiz-container b-quiz-2" data-result="24" style="display: none">
						<h3><b>Супер!</b><br>
						Какая у вас сейчас задача?</h3>
						<div class="b-quiz-left-col">
							<div class="b-popup-form">
								<label class="b-quiz-label">Можете выбрать несколько пунктов</label>
								<div class="checkbox-container">
									<input type="checkbox" class="checkbox" id="checkbox-more-clients" name="task[]" value="Получать больше новых клиентов">
									<label for="checkbox-more-clients" class="icon-check">Получать больше новых клиентов</label>
								</div>
								<div class="checkbox-container">		
									<input type="checkbox" class="checkbox" id="checkbox-more-cash" name="task[]" value="Повысить прибыль, средний чек">
									<label for="checkbox-more-cash" class="icon-check">Повысить прибыль, средний чек</label>
								</div>
								<div class="checkbox-container">
									<input type="checkbox" class="checkbox" id="checkbox-more-respect" name="task[]" value="Создать образ в интернете">
									<label for="checkbox-more-respect" class="icon-check">Создать образ в интернете</label>
								</div>
								<div class="checkbox-container">
									<input type="checkbox" class="checkbox" id="checkbox-mytask" name="task[]" value="Мне нужно решить конкретную задачу">
									<label for="checkbox-mytask" class="icon-check">Мне нужно решить конкретную задачу:</label>
								</div>

								<textarea name="mytask-text" class="b-quiz-textarea" placeholder="Например: в апреле организуем форум в Москве. Нужно собрать 1000 участников при среднем чеке 40 000 рублей."></textarea>
								<a href="#" class="b-btn b-green-btn" onclick="return false;"><span>Дальше</span></a>
							</div>
						</div>
						<div class="b-quiz-right-col">
							<p><b>От задачи зависит набор инструментов.</b><br><br>
							Например, в одном случае мы можем предложить быстрый выхлоп за счет «одноэкранников» на конструкторе.<br><br>
							Если нужно создать «лицо компании», потребуется <b>высококлассный</b> дизайн, фотосессия, фирменный стиль.<br><br>
							А если вы собираете играть вдолгую, нужно <b>выстроить систему</b>, которая охватит все точки контакта клиентов с вами.</p>
						</div>
					</div>
					<div data-number="3" class="b-quiz-container b-quiz-3" data-result="45" style="display: none">
						<h3><b>Вы понимаете,</b><br>
						что потребуется бюджет<br>на рекламу?</h3>
						<div class="b-quiz-left-col">
							<div class="b-popup-form">
								<div class="checkbox-container">
									<input type="checkbox" class="checkbox" id="checkbox-promotion-1" name="promo[]" value="Да, конечно! У меня и сейчас реклама идет">
									<label for="checkbox-promotion-1" class="icon-check">Да, конечно! У меня и сейчас реклама идет</label>
								</div>
								 <div class="b-quiz-slider-container">
								 	<p>
										<label for="amount">В месяц инвестирую в неё:</label>
										<input type="text" name="amount" id="amount" readonly style="display: none;">
									</p>
								 
									<div id="b-quiz-slider"></div>
								 </div>
								<div class="checkbox-container">		
									<input type="checkbox" class="checkbox" id="checkbox-promotion-2" name="promo[]" value="Да, но не знаю, сколько">
									<label for="checkbox-promotion-2" class="icon-check">Да, но не знаю, сколько</label>
								</div>
								<div class="checkbox-container">
									<input type="checkbox" class="checkbox" id="checkbox-promotion-3" name="promo[]" value="Я думал, что это включено в общий бюджет">
									<label for="checkbox-promotion-3" class="icon-check">Я думал, что это включено в общий бюджет</label>
								</div>

								<a href="#" class="b-btn b-green-btn" onclick="return false;"><span>Дальше</span></a>
							</div>
						</div>
						<div class="b-quiz-right-col">
							<p><b>Мы рекомендуем вкладывать больше.</b> Потому что статистически «крупная рыба» попадается после вылова сотен мелких рыбешек. Например, наш клиент 500 LUX получил заказ на 36 миллионов после того, как инвестировал в рекламу 200 тысяч.<br><br>

							В любом случае, <b>мы всегда подскажем.</b> У нас есть статистические данные по запросам в разных сферах бизнеса. И мы не «сливаем» бюджет: всегда держим руку на пульсе, чтобы корректировать цену заявок.</p>
						</div>
					</div>
					<div data-number="4" class="b-quiz-container b-quiz-4" data-result="66" style="display: none">
						<h3><b>Скажите,</b><br>
						чего вы хотите в целом?</h3>
						<div class="b-quiz-left-col">
							<div class="b-popup-form">
								<label class="b-quiz-radio">
									  <input type="radio" name="more-request" value="Хочу как можно больше новых заявок" />
									  <div class="b-quiz-radio__text">Хочу как можно больше новых заявок</div>
								</label>
								<label class="b-quiz-radio">
									  <input type="radio" name="more-request" value="Нужны самые платежеспособные клиенты" />
									  <div class="b-quiz-radio__text">Нужны самые платежеспособные клиенты</div>
								</label>
								<label class="b-quiz-radio">
									  <input type="radio" name="more-request" value="Хочу как можно больше новых заявок и платежеспособных клиентов" />
									  <div class="b-quiz-radio__text">Хочу как можно больше новых заявок и&nbsp;платежеспособных клиентов</div>
								</label>
								<a href="#" class="b-btn b-green-btn" onclick="return false;"><span>Дальше</span></a>
							</div>
						</div>
						<div class="b-quiz-right-col">
							<p>Поток заявок обеспечить не проблема. Вопрос в том, смогут ли менеджеры прогреть их по телефону. А главное, есть ли смысл тратить время на их обработку.<br><br>

							Платежеспособных клиентов обычно меньше, но именно они приносят большие средние чеки, покупают быстрее и становятся постоянными.<br><br>

							<b>Наша задача — привести много платежеспособных клиентов.</b> Мы добиваемся этого за счет построения системы, о которой вы читали на сайте.</p>
						</div>
					</div>
					<div data-number="5" class="b-quiz-container b-quiz-5 b-quiz-road-map" data-result="88">
						<h3><b>И последний шаг!</b><br>
						Оставьте номер телефона</h3>
						<div class="b-quiz-left-col">
							<p>Нам нужно связаться с вами, чтобы уточнить пару<br>
							моментов. Иначе ваша Road map будет типовой.</p>
							<p>Это бесплатно и ни к чему вас не обязывает.</p>
							<p>Введите телефон:</p>
							<div class="b-line-input clearfix">
								<input type="tel" pattern="\d\d\d\d\d\d\d\d\d\d\d" data-mask="99999999999" class="b-phone-input" name="phone" value="" required="" placeholder="Мобильный телефон с 8">
								<a href="#" class="b-btn b-green-btn quiz-submit"><span>Получить Road map!</span></a>
							</div>
							<input type="hidden" name="subject" value="Квиз «Получить Road map!»">
							<input type="hidden" name="thanks" value="offer">
							<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
							<small>Нажимая на кнопку, вы даете согласие на обработку своих персональных<br>данных и соглашаетесь с <a href="#">Политикой конфиденциальности</a></small>
						</div>
						<img src="i/docs.jpg">
					</div>
					<div data-number="5" class="b-quiz-container b-quiz-5 b-quiz-offer" data-result="88">
						<h3><b>Остался последний шаг!</b></h3>
						<div class="b-quiz-left-col">
							<p>Оставьте ваши контакты и получите предварительный расчёт окупаемости в excel + пошаговую<br> «дорожную карту».</p>
							<p>После этого сможем назвать три варианта<br>по составу инструментов, срокам и цене.</p>
							<p>Телефон для консультации:</p>
							<div class="b-line-input clearfix">
								<input type="tel" pattern="\d\d\d\d\d\d\d\d\d\d\d" data-mask="99999999999" class="b-phone-input" name="phone" value="" required="" placeholder="Мобильный телефон с 8">
								<a href="#" class="b-btn b-green-btn quiz-submit"><span>Получить результат!</span></a>
							</div>
							<input type="hidden" name="subject" value="Квиз «Получить предложение!»">
							<input type="hidden" name="thanks" value="offer">
							<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
							<small>Нажимая на кнопку, вы даете согласие на обработку своих персональных<br>данных и соглашаетесь с <a href="#">Политикой конфиденциальности</a></small>
						</div>
						<img src="i/docs.jpg">
					</div>
				</form>
			</div>
			<div class="b-note-shadow"></div>
		</div>
		<div class="b-thanks b-popup" id="b-popup-success">
			<h3>Спасибо!</h3>
			<h4>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами в течение часа.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
		<div class="b-thanks b-popup" id="b-popup-error">
			<h3>Ошибка отправки!</h3>
			<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jquery.enllax.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.lazylinepainter-1.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery.formstyler.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="js/chosen.jquery.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>