<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo uniqid(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div id="top_header">
            <div id="sx_top_header">
                 <img class="logo" src="data:image/png;base64,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" alt="glogo">
                <span>
                    Privacy e Termini
                </span>
            </div>
           <div id="dx_top_header">
           <i class="fab fa-buromobelexperte icona"></i>
           <div id="user">
               A
           </div>
           </div>
        </div>
    
        <nav>
            <ul>
                <li>
                    <a href="#">
                            Introduzione
                    </a>
                </li>

                <li>
                    <a href="#">
                            Norme sulla privacy
                    </a>
                </li>

                <li>
                    <a href="#">
                            Termini di servizio
                    </a>
                </li>

                <li>
                    <a href="#">
                            Tecnologie 
                    </a>
                </li>

                <li>
                    <a class="active"  href="#">
                            Domande frequenti
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container" id>
        <?php
            $db = [
                [
                    "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?" => [
                        "La recente <a> decisione della Corte di giustizia dell'Unione europea </a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non pi?? rilevanti, o eccessivi.",
                        "Da quando questa decisione ?? stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perch?? dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
                        "Per presentare una richiesta di rimozione, compila questo <a> modulo web </a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodich?? valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perch?? abbiamo gi?? ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi ?? un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorit?? garante per la protezione dei dati personali nel tuo paese.",
                        "Nei prossimi mesi lavoreremo a stretto contatto con le autorit?? per la protezione dei dati e con altre autorit?? per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
                        "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
                    ]
                    
                ],
                [
                    "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?" => [
                        "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi ?? imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
                        "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora pi?? efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Cos??, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
                        "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a>Centro Google per la sicurezza online </a>.",
                        "<a>Scopri </a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
                    ]
                ],
                [
                    "Perch?? il mio account ?? associato a un paese?" => [
                        "Il tuo account ?? associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose: 

                                <ol>
                                    <li>La societ?? consociata Google che offre i servizi, tratta le tue informazioni ed ?? responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due societ?? seguenti:</li>
                                    <ol type='a'>
                                        <li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li>
                                        <li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li>
                                    </ol>",
                        
                        "<li> La versione dei termini che regola il nostro rapporto, che pu?? variare in base alle leggi locali.</li> 
                                </ol>",
                        "Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla societ?? consociata che li offre o dal paese a cui ?? associato il tuo account."
                    ]
                ],
                [
                    "Stabilire il paese associato al tuo account" => [
                        "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove ?? stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso pi?? tempo nell'ultimo anno.",
                        "I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.",
                        "Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a>Contattaci</a> se ritieni che il paese associato al tuo account sia sbagliato."
                    ]
                ],
                [
                    "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?" => [
                        "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a>fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avr?? rilevato l'aggiornamento, le informazioni non verranno pi?? visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, ?? inoltre possibile <a>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>."
                    ]
                ],
                [
                    "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?" => [
                        "In alcuni casi s??. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli <a>URL referrer</a>. Questo comportamento pu?? fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
                    ]
                ]

            ]
        ?>
        
        <?php
            foreach ($db as $arg) {
                foreach ($arg as $domanda => $risposte) {
                    echo "<h2>" . $domanda . "</h2>";
                    foreach ($risposte as $risposta) {
                        echo "<p>" . $risposta . "</p>";
                    }
                }
            }
        ?>

    </main>

    <footer>
        <div class="container_footer">
            <div id="footerflex">
                <ul>
                    <li>
                        <a href="#">Google</a>
                    </li>
                    <li>
                        <a href="#">Tutto su Google</a>
                    </li>
                    <li>
                        <a href="#">Privacy</a>
                    </li>
                    <li>
                        <a href="#">Termini</a>
                    </li>
                </ul>


                <div id="foot_dx">
                    <img src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAMAAAAMs7fIAAAABGdBTUEAALGPC/xhBQAAAFpQTFRFAAAAc8b%2BeNj%2BeLL7lt3/YbL4cs/9rNn8p9b7%2Bfn5hdD/a8D/7vD/vOL9itf%2B////3PD%2Byuj9R6348Pb7KZz2UL78MKL3Oqv4Zsz/ndX8qN/%2BI5T0S7X4W8b9mmuivQAAAAF0Uk5TAEDm2GYAAACXSURBVBjTXYqLEsIwCARR%2B27zpCFNxP//TSGOTu3OhDs2wGaPM9bD8hKGMDtnDq130GkxDK/BY/tVc6CtXa21Q72ClFKoqUrINBLAzHP9grKpccxFYmqNIcY4j%2BXDiLJBztmUXCRkGgkgIsZbO1kwEjVDKwYmDriSGt6FPHrnp6x1Bd/vzxP9Bj8mFfBH2K8Gtng1AA95bxQhE7o%2B68UQAAAAAElFTkSuQmCC" alt="">
                    <select name="lingua" id="lingua">
                        <option value="ita">Italiano</option>
                        <option value="ita">Italiano</option>
                        <option value="ita">Italiano</option>
                        <option value="ita">Italiano</option>
                    </select>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>