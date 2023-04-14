# Ważne linki

[Sprawdź stronę pod tym linkiem](https://histquest.zsi.kielce.pl/)

[Link do klikalnej makiety](https://www.figma.com/proto/CJVcv32IjxcDUim8O7MxK2/HistQuest?node-id=25-196&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=5%3A1024)

# HISTQUEST - działanie gry (algorytm)\

Projekt gry historycznej mającej na celu usprawnienie i unowocześnienie lekcji historii w szkole. Gra będzie zawierać wiele różnych minigier, które sprawią że użytkownik szybko się nie znudzi. W trakcie rozgrywki gracz będzie wcielał się w różne role:

- Prezydenta,
- Dowódcy wojskowego,
- Dyplomaty,
- Ekonomisty,
- Kupca

Do poszczególnych misji i elementów gry można dostać się poprzez kody QR umieszczone na końcu tematów w podręczniku szkolnym.

## Platformy gry

- Strona internetowa,
- Gra mobilna,
- Gra desktopowa

## Opis szczegółowy

### Pobieranie gry

![Strona początkowa](/github/start.jpg)

Użytkownik sprawdzi swoje umiejętności strategiczne oraz wiedzę historyczną i ekonomiczną. Początkowo, aby uzyskać dostęp do gry gracz musi wykonać quiz, który ustali poziom trudności. Następnie gracz wybiera, czy chce kontynuować rozgrywkę w przeglądarce, lub chce pobrać na komputer/telefon.

### Wstęp gry

![Wstęp gry](/github/wersal.png)

Po włączeniu gry na ekranie ukazuje się zdjęcie umieszczone powyżej. Zadaniem gracza jest wybranie na mapie oznaczjącego miejsce podpisania traktatu na mocy, którego Polska powróciła na mapę Europy. Po wybraniu poprawnego punktu oczom ukazuje się:

![Traktat Wersalski](/github/wersal2.png)

Napisy pojawiają się pojedynczo z wpasowanym dźwiękiem pisania na maszynie w tle, tekst czyta narrator. Po tym zadaniu gracz przechodzi do menu gry.

### Menu gry

![Menu gry](/github/menu.png)

W menu gry użytkownik ma dostępne opcje:

- Nowa gra,
- Wczytaj grę,
- Ustawienia,
- Autorzy

### Nowa gra

![Interfejs gry](/github/interfejs.png)

Na zdjęciu powyżej przedstawiamy przykładowy projekt głównego interfejsu gry. W trakcie gry czas umieszczony w prawym górnym rogu cały czas się zwiększa, gracz ma możliwość zatrzymania go, ponownego wystartowania, przyspieszenia. Zadaniem gracza jest nie doprowadzić do bankructwa kraju, odpowiednio manipulować polityką zagraniczną, rozwijać kraj gospodarczo, zarządzać jednostkami w trakcie wojny, sterować handlem swojego kraju oraz podejmować decyzje dotyczące polityki swojego kraju.

Natomiast w lewym górnym rogu, użytkownik będzie miał dostępne statystki kraju:

- Panującego prezydenta,
- Ilość złota,
- Ilość węgla,
- Ilość zboża,
- Ilość stali,
- Zadowolenie mieszkańców,
- Ilość drewna,
- Ilość ludzi zdolnych do służby wojskowej

### Założenia działania gry

W trakcie całej gry użytkownik otrzymuje różnego rodzaju komunikaty o sytuacji panującej na świecie, niektóre z nich będą wymagać podjęcia decyzji przez gracza, w których musi wybrać opcję historyczną, ponieważ w przeciwnym wypadku gracz przez chwile będzie miał możliwość gry, a potem zobaczy konsekwencje tej decyzji. Ważnym aspektem będzie utrzymywanie dobrych relacji z sąsiadami, ponieważ jeżeli będą na zbyt niskim poziomie państwo będzie skłonne wypowiedzieć graczowi wojne, a gdy będą wysokie państwo będzie mogło zaproponować sojusz, lecz dyplomacja nie może być nie zgodna z historią.

Gracz będzie mógł eksportować oraz importować zasoby potrzebne do zapewnienia dobrobytu w kraju oraz budowy.

### Rodzaje Misji

1. Kiedy nadejdzie 23 września 1922 roku, użytkownik otrzyma komunikat, że w ciągu roku musi zbudować port w Gdyni, na mapie będzie migać kropka oznaczająca to miasto, a po prawej stronie będzie miał napisaną aktualną misję.
   ![Misja gdynia](/github/misja_gdynia.png)
   Po odznaczeniu komunikatu graczowi ukazuje się interfejs umieszczony powyżej. Po kliknięciu w kropke oznaczającą Gdynie gracz przechodzi do kolejnego interfejsu:
   ![Misja gdynia](/github/gdynia.png)
   Zadaniem gracza będzie rozbudowa Gdyni, korzystająć z interfejsu. W trakcie całej rozgrywki gracz będzie miał wiele podobnych misji do wykonania. Aby budować coraz więcej nowoczesnych budynków gracz będzie musiał badać nowe technologie w dziedzinie przemysłu.
2. W trakcie jednej z innych misji zadaniem gracza będzie wykonać minigrę (skojarzenia) na podstawie okresu historycznego w trakcie którego aktualnie się znajduję. Poniżej przykładowy widok z minigrą na temat powstania wielkoposkiego:
   ![Minigra memorizer](/github/memorizer.png)
3. Inny rodzaj misji pojawia się kiedy państwa ościenne wypowiedzą wojnę. Wtedy gracz przenosi się do zupełnie innego interfejsu:
   ![Zarządzanie wojskiem](/github/war.png)
   W trakcie tego zadnia gracz musi sterować jednostakmi, w taki sposób aby odpierać wrogie ataki, a następnie przejść do ofensywy przeciwko najeźdźcy. W trakcie bitew będzie rozwijał generałów. Aby zapewnić sobie przewagę gracz będzie musiał rozwijać technologie wojskowe.
