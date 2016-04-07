# oop
Спецификация программных требований 


1.	Введение

1.1.	Назначение
Возникла надобность в академических целях написать приложение в котором можно было бы сроить графики математических функций, интерфейс должен быть максимально простым и приветливым, как в exel и соответственно об эстетической составляющей также следует позаботиться.

1.2.	Область применения
Приложение можно будет использовать в обучении для построения графиков нужных математических функций, ускоряя и оптимизируя таким образом свой процесс работы. Разрабатываемая программа изначально не предназначается для широкого круга лиц, не будет использоваться в коммерческих целях и является в первую очередь составляющим звеном личного инструментария.

1.3.	Определения, акронимы и сокращения
Предполагается что спецификация не будет содержать редких акронимов и определений за исключением общенаучных математических и IT терминов, которые не покажутся диковинными человеку, хоть в какой то мере владеющему предметной областью. 

1.4.	Обзор
[Дается описание остальной информации из "Спецификации программных требований" и структуры этого документа.]


2.	Общее описание

• Перспективы: изначально продукт предназначен для использования в личных целях и не будет являться продуктом массового достояния, но в перспективе не исключена доработка приложения и распространение его на более широкую аудиторию. Нужно взвесить все за и против и проанализировать конкурентов в данной нише, очертить наши преимущества и недостатки и как результат, понять сможем ли мы быть приоритетными и привлекательными для потребителя. 
• Функции основной функцией на данный момент является построение графиков на основе исходных данных;
•Лаконичный дизайн, интуитивно понятный интерфейс, клиент-серверное приложение не требует особого дополнительного ПО;
• Регламент возможных ограничений четко не обусловлен и будет формироваться на протяжении процесса разработки;

3.	Конкретные требования 

3.1.	Функциональность 
Программа представляет собой клиент-серверное приложение, как связку PHP,исполняемого exe файла написанного на С++  и javascript. 
Пользователь открывает приложение в браузере который в данном случае выступает клиентом и вводит входные параметры для построение графика(математическую функцию и интервал на котором будет происходить построение). Введенные данные с помощью Ajax передаются на серверному скрипту написанному на PHP, который в свою очередь запускает исполняемый файл что выполняет основную часть работы. С++ исполняемый файл возвращает координаты в виде строки, которая в последствие распарсивается и в видео двумерного массива передается  в javascript скрипт который выполнял запрос. Если получены корректные данные исполняется ветка success и происходит построение графика, в ином случае скрипт сообщает об ошибке. 
Чтобы получать корректный результат, следует не забывать об валидации получаемых от формы данных, поэтому реализована проверка правильности координат задаваемого промежутка.
Программа способна вычислять базовые функции с одной переменой типа ( x+3) .А также реализованы некоторые геометрически функций: sin,cos,tg,arctg,arcsin,ln,arccos,exp,lg.
 
3.2.	Практичность 
• Приложение является простым и интуитивно понятным, поэтому времени на обучение юзеров не понадобится;
• Так как не планируется распространять приложение на широкую аудиторию и оно, в большей мере, будет являться инструментом для личного использования, высоконагруженность не является приоритетом на данном этапе;
• За счет исполняемого файла на С++  вычисление данных будет происходить достаточно быстро.

3.3.	Надежность
Мы имеем дело с простым базовым клиент-серверным приложением, с минимальным риском возникновениям ошибок, которые могут, в принципе, только при передаче некорректных данных пользователем. Чтобы избежать возможных проблем, будет реализована примитивная валидация формы.

3.4.	Производительность
Тесты производительности будут проводиться в перспективе на дальнейших этапах, при решении о представления приложения широкой аудитории.

3.5.	Проектные ограничения
Было решено использовать PHP 5.6 как серверный язык, активно пользоваться возможностями javascript для того чтобы обеспечить обновления данных без непосредственной перезагрузки страницы. Как библиотека построения графиков была выбрана Jqplot – довольно легковесный для построения линейных графиков, ее плюсом также является дотошная документация, которая изобилует примерами. 

3.6.	Требования к интерактивной пользовательской документации и справочной системе
Не предполагается написание документации для данной версии приложения.

3.7.	Приобретаемые компоненты
Программа предназначена для личного использования, соответственно находиться вне лицензионных норм или ограничений использования.

3.8.	Лицензионные требования
Используется программный инструментарий, распространяемый в соответствии с лицензией GPL. Исполняемый файл написан и скомпилирован в Visual Studio 2013 – лицензионной версии используемой для академических целей.

3.9.	Предупреждения, касающиеся законодательства, авторских прав и другие замечания
Отсутствуют юридические предупреждения, гарантии, авторские и патентные права, текстовые торговые марки, знаки или логотипы, которые имеют отношение к данному программному обеспечению.

3.10.	Применяемые стандарты
Отсутствуют юридические стандарты, стандарты качества и стабильности, отраслевые стандарты практичности, взаимодействия, локализации, совместимости с операционными системами и т. д.

4.	Сопровождающая информация
Сюда нужно писать мануалы.

