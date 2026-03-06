<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SongsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('songs')->delete();
        
        DB::table('songs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'edition_id' => 7,
                'title' => 'Brividi',
                'collaborators' => 'Mahmood, Blanco, Michelangelo',
                'position' => 1,
                'lyrics' => 'Ho sognato di volare con te
Su una bici di diamanti
Mi hai detto sei cambiato,
Non vedo più la luce nei tuoi occhi
La tua paura cos’è?
Un mare dove non tocchi mai
Anche se il sesso non è
La via di fuga dal fondo
Dai non scappare da qui
Non lasciarmi così
Nudo con i brividi
A volte non so esprimermi
E ti vorrei amare, ma sbaglio sempre
E ti vorrei rubare un cielo di perle
E pagherei per andar via,
Accetterei anche una bugia
E ti vorrei amare ma sbaglio sempre
E mi vengono i brividi, brividi, brividi
Tu, che mi svegli il mattino
Tu, che sporchi il letto di vino
Tu, che mi mordi la pelle
Con i tuoi occhi da vipera
E tu, sei il contrario di un angelo
E tu, sei come un pugile all’angolo
E tu scappi da qui, mi lasci così.
Nudo con i brividi
A volte non so esprimermi
E ti vorrei amare, ma sbaglio sempre
E ti vorrei rubare un cielo di perle
E pagherei per andar via,
Accetterei anche una bugia
E ti vorrei amare ma sbaglio sempre
E mi vengono i brividi, brividi, brividi
Dimmi che non ho ragione
Vivo dentro una prigione
Provo a restarti vicino
Ma scusa se poi mando tutto a puttane
Non so dirti ciò che provo, è un mio limite
Per un ti amo ho mischiato droghe e lacrime
Questo veleno che ci sputiamo ogni giorno
Io non lo voglio più addosso
Lo vedi, sono qui,
Su una bici di diamanti, uno fra tanti.
Nudo con i brividi
A volte non so esprimermi
E ti vorrei amare, ma sbaglio sempre
E ti vorrei rubare un cielo di perle
E pagherei per andar via,
Accetterei anche una bugia
E ti vorrei amare, ma sbaglio sempre
E mi vengono i brividi, brividi, brividi.',
                'created_at' => '2026-03-05 17:31:07',
                'updated_at' => '2026-03-06 12:16:39',
            ),
            1 => 
            array (
                'id' => 2,
                'edition_id' => 3,
                'title' => 'Per sempre si',
                'collaborators' => 'F. Abbate, A. La Cava, S. Da Vinci, F. Da Vinci, F. Mercuri, G. Cremona e E. Maimone',
                'position' => 1,
                'lyrics' => 'È cominciato tutto quanto dal principio
Io che per te ero solo un uomo sconosciuto
Poi diventato un re dal cuore innamorato
Tu una regina ora vestita in bianco sposa
Abbiamo sognato figli in una grande casa
E superato tutte le difficoltà
Perché un amore, non è amore per la vita
Se non ha affrontato la più ripida salita
E si accenderà la musica
E qui ti aspetterò
Il più grande giorno
Ti regalerò
Saremo io e te
Per sempre
Legati per la vita che
Senza te
Non vale niente
Non ha senso vivere
Con la mano sul petto
Io te lo prometto
Davanti a Dio
Saremo io e te
Da qui
Sarà per sempre sì
So bene che è una grande incognita il futuro
Ma insieme a te non mi spaventerà perché
Costruiremo tutto ma non alzeremo un muro
Litigare e far l’amore poi che male c’è
E si accenderà la musica
Per te io canterò
Il più grande giorno
Ti regalerò
Saremo io e te
Per sempre
Legati per la vita che
Senza te
Non vale niente
Non ha senso vivere
Con la mano sul petto
Io te lo prometto
Davanti a Dio
Saremo io e te
Da qui
Sarà per sempre
Sì, soltanto sì
Per questi giorni
E mille altri ancora
Un semplice sì
L’eternità è dentro una parola
Saremo io e te
Per sempre
Legati per la vita che
Senza te
Non vale niente
Non ha senso vivere
Con la mano sul petto
Io te lo prometto
Davanti a Dio
Saremo io e te
Accussì
Sarrà pe sempe sì',
                'created_at' => '2026-03-05 17:57:59',
                'updated_at' => '2026-03-06 12:26:12',
            ),
            2 => 
            array (
                'id' => 3,
                'edition_id' => 3,
                'title' => 'Tu mi piaci tanto',
                'collaborators' => 'Sayf, L. Di Blasi e G. De Lauri',
                'position' => 2,
                'lyrics' => 'Tu, figlio di un muratore
L’Emilia che si allaga
E la Liguria pure
E intanto che si ride
E che si fa l’amore
Le tue tasse vanno spese
In un hotel a ore
Io,
Amando a modo mio
Ho sbagliato tante cose
E tante mode non le seguo
Io,
Amando a modo mio
Avrei voluto darti
Meno cuore, amore mio
E allora
Corri contro il tempo
Che il denaro non ti aspetta
E cosa vuoi che sia la fretta
Su una macchina che scheggia
E non mi vedrai alla finestra
A farti una serenata
Perché il mondo non si ferma
Ma non ho fiato più
Rallenta
Quando si spegne la luce
Tu, con chi rimani?
Ti senti a posto
Col tuo vino rosso
Il nome su un bossolo?
Tu mi piaci
Tu mi piaci
Tu mi piaci tanto
Tu mi piaci
Tu mi piaci
Tu mi piaci tanto
Noi siamo tutti uguali
Al bar e a lavorare
Figli di nostra madre
Vogliamo solo amare
E in questa avidità
E in questo dimostrare
Tu mi piaci tanto
L’Italia per me è quella grande azione di Cannavaro
L’Italia è tristemente nota per qualche fatto ma minimizziamo
Il cielo è azzurro, e il pomeriggio
Se ci armate, noi non partiamo
E come ha detto un imprenditore
“L’Italia è il paese che amo”
Amore, amore mio
Che paura di venir capito
In questa fase di tirocinio
Tenco è morto qui vicino
Non temere, amore mio
Farò meglio per nostro figlio
Schiaccerò quelli degli altri
Così giocherà da solo
Quando si spegne la luce
Tu, con chi rimani?
Ti senti a posto
Col tuo vino rosso
Il nome su un bossolo?
Tu mi piaci
Tu mi piaci
Tu mi piaci tanto
Tu mi piaci
Tu mi piaci
Tu mi piaci tanto
Noi siamo tutti uguali
Al bar e a lavorare
Figli di nostra madre
Vogliamo solo amare
E in questa avidità
E in questo dimostrare
Tu mi piaci tanto
Ho fatto una canzonetta
È un fiore su una camionetta
E le botte delle piazze
Le dimentichiamo
Ho fatto una canzonetta
Spero che non vi spaventi
Che possiamo ripartire
Tutti a mano, a mano
Tu mi piaci
Tu mi piaci
Tu mi piaci tanto
Tu mi piaci
Tu mi piaci
Tu mi piaci tanto
Noi siamo tutti uguali
Al bar e a lavorare
Figli di nostra madre
Vogliamo solo amare
E in questa avidità
E in questo dimostrare
Tu mi piaci tanto',
                'created_at' => '2026-03-05 23:15:07',
                'updated_at' => '2026-03-06 12:26:36',
            ),
            3 => 
            array (
                'id' => 4,
                'edition_id' => 3,
                'title' => 'Che fastidio!',
                'collaborators' => 'Ditonellapiaga, E. Castroni, E. Ruzzi e A. Casagni',
                'position' => 3,
                'lyrics' => 'Io non so più cos’è normale
O un’allucinazione
Se sono matta io
Non è che voglia litigare
Ho solo qualche osservazione
Un pensiero mio
La moda di Milano (che fastidio!)
Lo snob romano (che fastidio!)
Il sogno americano (che fastidio!)
E il politico italiano (che fastidio!)
La musica tribale (che fastidio!)
I cani alle dogane (che fastidio!)
E il corso di pilates mi deprime, il pranzo salutare (che schifo!)
Stasera vado a una festa la solita farsa e non m’interessa (che fastidio!)
E la vicina molesta bussa alla porta “abbassa quei bassi” (che fastidio!)
E dimmi cosa mi hai messo nel bicchiere, ha un gusto amaro e (non mi fido!)
Perché mi gira la testa e tutta la stanza e finché non passa (che fastidio!)
Io non so più cos’è normale
O un’allucinazione
Se sono matta io
Non è che voglia litigare
Ma ho come l’impressione
Di non potermi controllare
E allora te lo dico (che fastidio!)
Se vuoi te lo ripeto (che fastidio!)
L’amico dell’amico senza invito che fa il figo, che fallito
Facciamoci una foto (che fastidio!)
Che fai tu di lavoro? (Faccio schifo!)
Scambiamoci il numero, ti scriverò
Ma sotto quel sorriso, dico
Che fastidio!
Che fastidio!
Che fastidio!
Che fastidio!
Su le mani solo se sei dell’acquario
Strano ti facevo proprio sagittario
La chiamo dall’India, dall’Albania, Torino
Per un piano tariffario
Nasi alla francese come in fotocopia
Imparare a vivere con un tutorial
Passa a premium, clicca qui, ascolta ora!
Cento cover Bossa Nova
Io non so più cos’è normale
O un’allucinazione
Se sono matta io
Se sono matta io!
E allora te lo dico (che fastidio!)
Se vuoi te lo ripeto (che fastidio!)
L’amico dell’amico senza invito che fa il figo, che fallito
Facciamoci una foto (che fastidio!)
Che fai tu di lavoro? (Faccio schifo!)
Scambiamoci il numero, ti scriverò
Ma sotto quel sorriso, dico
Che fastidio!
Che fastidio!
Che fastidio!
Che fastidio!
Facciamoci una foto (che fastidio!)
Che fai tu di lavoro? (Faccio schifo!)
Scambiamoci il numero, ti scriverò
Ma sotto quel sorriso, dico
Io non so più cos’è normale
O un’allucinazione
Se sono matta io
Se sono matta io
Se sono matta io
Se sono matta io
Se sono matta io
Se sono matta!
Nonostante i corsi di meditazione
Di respirazione
Non posso sopportare
Gli arrivisti e i “giornalisti perbenisti” (che fastidio!)
E poi i tronisti presentati come artisti (che fastidio!)
Oppure l’inno nazionale al piano bar
Gli F24, lo spam
Che fastidio! Che fastidio!
Che fastidio!
Io non so più cos’è normale
Ma sono matta io
Ma sono matta io
Ma sono matta',
                'created_at' => '2026-03-05 23:15:53',
                'updated_at' => '2026-03-06 12:26:51',
            ),
            4 => 
            array (
                'id' => 5,
                'edition_id' => 3,
                'title' => 'Magica favola',
                'collaborators' => 'Arisa, G. Anastasi, M. Cantagalli, F. Dalè e C. Frigerio',
                'position' => 4,
                'lyrics' => 'A dieci anni insieme alle mie bambole giocavo con l’amore
A quattordici anni il primo bacio nelle mani avevo un fiore
Con l’adolescenza io ho capito che cos’era la passione
Che non c’entra con il cuore, si confonde col dolore
Se finisse il mondo in questo istante fumerei una sigaretta
Metterei un vestito eccezionale sembrerei una principessa
Chiamerei mio padre solamente per ridirgli che mi manca
Forse sono solo stanca
Fuori già si è fatta l’alba
C’era una volta l’oceano
Io navigavo con te
C’era la luna nel cielo
Una notte che non ho paura nemmeno di me
A trent’anni tutti mi dicevano che bella la tua voce
A quaranta voglio solamente ritrovare un po’ di pace
Che mi piacerebbe ritornare tra le braccia di mia madre
Mentre un’altra stella cade
Nel romantico disordine
C’era una volta l’oceano
Io navigavo con te
C’era la luna nel cielo
Una notte che non ho paura nemmeno di me
C’era una volta il mistero
Ti innamoravi di me
Non c’era il bianco né il nero
Ma l’arcobaleno più bello che c’è
Io mi perdo tra le onde
Con il sole che piano si accende
E il passato diventa presente
La bambina ritorna innocente
Chiudi gli occhi amore
O ti presto gli occhiali da sole
Che per oggi la vita è una piccola magica favola
C’era una volta l’oceano
Io navigavo con te
Non c’è più bianco né nero
Ma l’arcobaleno più grande che c’è
C’è l’arcobaleno qui dentro di me',
                'created_at' => '2026-03-05 23:16:46',
                'updated_at' => '2026-03-06 12:27:04',
            ),
            5 => 
            array (
                'id' => 6,
                'edition_id' => 3,
                'title' => 'Male necessario',
                'collaborators' => 'Fedez, M. Masini, F. Abbate, A. La Cava, A. Iammarino e N. Lazzarin',
                'position' => 5,
                'lyrics' => 'So che in fondo non c’è tempo
Quante cose che cambiano
Ti ho deluso ma dimmi qualcosa che non so
I miei problemi ormai
Saranno la parte di te
Quella più vulnerabile e spietata
Lo sai
Non ho più spazio per dipingermi d’inchiostro
Lo ammetto però
Per altre cicatrici trovo sempre un posto
Da questa notte resto solo insieme a me
Toccando il fondo in una stanza di un hotel
Un giorno poi comprenderò cos’è l’amore
Ma nel frattempo giuro mi puoi odiare
Come un latitante a un passo dall’arresto
Ora non ho più bisogno di scappare io
Dal silenzio che è un rumore
Da tutto questo male necessario
Dovrei separare l’ego dall’io
Ma non siamo fatti per essere fragili
Ogni padre inizia come fosse un Dio
Ma poi finisce che diventa un alibi
La gente pudica giudica
Che brutta gente che frequenta Fedez
Ma ci si dimentica sempre che Giuda
Se la faceva con gente per bene
E so che farà male
E vorrai cominciare
A bere poi fumare
Forse per distrazione
Se è vero che siamo solo di passaggio
Il vero obiettivo non può essere la meta
Ma imparare a godersi il viaggio
Quando crescerai
E non mi chiederai nemmeno più il permesso
Si impara vedrai
Che i mostri non stanno soltanto sotto al letto
Da questa notte resto solo insieme a me
Toccando il fondo in una stanza di un hotel
Un giorno poi comprenderò cos’è l’amore
Ma nel frattempo giuro mi puoi odiare
Come un latitante a un passo dall’arresto
Ora non ho più bisogno di scappare io
Dal silenzio che è un rumore
Da tutto questo male necessario
Ci ho messo una vita per sentirmi vivo
Seguendo la linea sottile di un filo
Succederà ciò che deve succedere
Anche nel buio si impara a vedere
In fondo a tutto il male necessario
Da questa notte resto solo insieme a me
Toccando il fondo in una stanza di un hotel
Un giorno poi comprenderò cos’è l’amore
Ma nel frattempo giuro mi puoi odiare
Come un latitante a un passo dall’arresto
Ora non ho più bisogno di scappare io
E ringrazierò il passato
E chi mi ha condannato
E tutto questo male necessario
So che in fondo non c’è tempo
Quante cose che cambiano
Ti ho deluso ma dimmi qualcosa che non so',
                'created_at' => '2026-03-05 23:17:59',
                'updated_at' => '2026-03-06 12:27:16',
            ),
            6 => 
            array (
                'id' => 7,
                'edition_id' => 3,
                'title' => 'Prima che',
                'collaborators' => 'Nayt e S. Tognini',
                'position' => 6,
                'lyrics' => 'Prima della prima donna
Prima della prima volta
Prima della prima droga
Prima della prima idea
Prima del mio vero amico
Che l’ho visto andare via
Prima di essere partito
Prima di tornare qui
Dell’idea di aver fallito
Ogni volta che mi fido
Che la gente mi fa schifo
Che la gente è come me
Prima di farmi domande
Prima di essere svogliato
Prima del giusto e sbagliato
Io chi sono, chi sei te?
Finché sai cosa prendi
Non lo sai cosa perdi
Forse è tardi dicevi
Ce la fai? Non lo so
La realtà non si vede
Finché io non ti vedo
Finché tu non ci vedi me (me)
Supportarci a vicenda
Sopportarci dicendo
Che ne vale la pena
Dimmi è vero o non ci credi?
La realtà non si vede
Finché tu non mi vedi
Finché io non ci vedo te (te)
Senza oggetti o costumi, progetti
Immaginare i posteri
Costretti al presente
Sfuggirci ubriachi o con i postumi
Chi aspetti? Io nessuno a salvarci
Fissare il muro e stancarsi
Trovare un buco e saltarci
Io non credo a chi mi chiama
Credo abbia sbagliato nome
Io non credo a chi mi ama, di più,
Non credo abbia valore
Perché in tutta questa roba che c’ho addosso mi confondo
E non so se mi conforta
O mi ostacola il confronto
Finché sai cosa prendi
Non lo sai cosa perdi
Forse è tardi dicevi
Ce la fai? Non lo so
La realtà non si vede
Finché io non ti vedo
Finché tu non ci vedi me (me)
Supportarci a vicenda
Sopportarci dicendo
Che ne vale la pena
Dimmi è vero o non ci credi?
La realtà non si vede
Finché tu non mi vedi
Finché io non ci vedo te (te)
Prima che qualcuno parli
Prima che tu ti dica è tardi
Prima che continui a farmi
Com’è che continuo a farmi?
Prima di essere scontato
O di essere scordato
Prima di essere qualcuno
Che vuol essere ascoltato
Prima che tu faccia un post
Prima che controlli i like
Prima che tu dia potere agli altri
Su quello che fai
Prima di mettere i vestiti
Dell’amore di esserne investiti
Di crescere aggressivi
Chi siamo?
Finché sai cosa prendi
Non lo sai cosa perdi
Forse è tardi dicevi
Ce la fai? Non lo so
La realtà non si vede
Finché io non ti vedo
Finché tu non ci vedi me (me)
Supportarci a vicenda
Sopportarci dicendo
Che ne vale la pena
Dimmi è vero o non ci credi?
La realtà non si vede
Finché tu non mi vedi
Finché io non ci vedo te (te)
Come vorrei, come vorrei
Come vorrei, come vorrei
Come vorrei, come vorrei
Che tu vedessi me.',
                'created_at' => '2026-03-05 23:18:34',
                'updated_at' => '2026-03-06 12:27:32',
            ),
            7 => 
            array (
                'id' => 8,
                'edition_id' => 3,
                'title' => 'Stupida sfortuna',
                'collaborators' => 'Fulminacci e P. Paroletti',
                'position' => 7,
                'lyrics' => 'Ti troverò dentro a una foto
Sotto l’acqua mentre nuoto
Nella sabbia e nel cemento
Dentro un cinema all’aperto
Come un’allucinazione
In mezzo a tutte le persone
Che vanno chissà dove
E passeranno
Classifiche e Sanremi
Taxi treni aerei
E se mi stai ancora cercando
Sono dove stavo ieri
Ho solo più pensieri
Un po’ meno fiducia
E qualche buona scusa
Ma pensa un po’
Stupida stupida stupida sfortuna
Tu come stai
Gelida gelida gelida paura
Vienimi a prendere sto in mezzo a una strada
Continuo a perdere le chiavi di casa
Ma pensa un po’
Vado di corsa e resto indietro
E soffia il vento della metro
Tra le piastrelle colorate
E le rovine sotto a un vetro
C’è un manifesto col tuo nome
In mezzo a un fiume di persone
Che vanno chissà dove
E passeranno
Semafori e cantieri
Pianeti e buchi neri
E dai facciamo i seri
Ma pensa un po’
Stupida stupida stupida sfortuna
Tu come stai
Gelida gelida gelida paura
Vienimi a prendere sto in mezzo a una strada
Continuo a perdere le chiavi di casa
E adesso il tempo è solo un mucchio di secondi
Di primavere e poi di nuovo rami spogli
Ma spero di essere il migliore dei tuoi sbagli
Ci credi o no?
Stupida stupida stupida sfortuna
Gelida gelida gelida paura
Dopo di te non l’ho più detto a nessuna
Vorrei raggiungerti ma qui c’è troppa notte e poca luna e lo sai
Stupida stupida stupida sfortuna
Che ci penso anche se non ci penso
Gelida gelida gelida paura
Ogni volta che non mi addormento
L’infinito a me mi fa spavento
Come il cielo come il mare aperto
Stupida sfortuna starò più attento',
                'created_at' => '2026-03-05 23:19:22',
                'updated_at' => '2026-03-06 12:27:46',
            ),
            8 => 
            array (
                'id' => 9,
                'edition_id' => 3,
                'title' => 'Stella stellina',
                'collaborators' => 'E. Meta, Dardust e G. Pollex',
                'position' => 8,
                'lyrics' => 'Stella stellina
La notte si avvicina
Non basta una preghiera
Per non pensarci più
Dalla collina si attende primavera
Ma non c’è quel che c’era
Non ci sei più tu
Ho trovato la tua bambola
Mi è sembrato di vederti ancora
Eri così piccola
La stringevi fino a sera
È passata già un’eternità
O solamente un’ora
Da quando nel cielo una nuvola
Risale dalla tua casa
Dalla mia casa
Stella stellina
La notte si avvicina
Non basta una preghiera
Per non pensarci più
Dalla collina si attende primavera
Ma non c’è quel che c’era
Non ci sei più tu
Ho cercato di strapparmi il cuore
Perché senza non si muore
Ma ho avuto paura nel mentre
Di non sentire più niente
Ho pensato anche di scappare
Da una terra che non ci vuole
Ma non so dove andare
Tra muri e mare non posso restare
Stella stellina
La notte si avvicina
Non basta una preghiera
Per non pensarci più
Dalla collina si attende primavera
Ma non c’è quel che c’era
Non ci sei più tu
Fiori in un cortile con le pietre intorno
Come le farfalle hai vissuto un giorno
Figlia di nessuno, melodia di un canto
Quello della gente che ti ha amato tanto
Oh, mia bambina, la notte è nera nera
La rabbia e la preghiera non basteranno più
Dalla collina verrà una primavera
Nel vento della sera ci sarai pure tu
Stella stellina
La notte si avvicina
Non basta una preghiera
Per non pensarci più
Dalla collina verrà una primavera
Nel vento della sera ci sarai pure tu
Non ti ho dimenticato
Aspetto il tuo ritorno
Come le farfalle
Hai vissuto solo un giorno',
                'created_at' => '2026-03-05 23:19:55',
                'updated_at' => '2026-03-06 12:27:56',
            ),
            9 => 
            array (
                'id' => 10,
                'edition_id' => 3,
                'title' => 'Qui con me',
                'collaborators' => 'S. Brancale, Fiat131, N. Bruno, S. Mineo, C. Avarello e F. Barnaba',
                'position' => 9,
                'lyrics' => 'C’è una canzone alla radio che suona
E che parla di noi.
Di quell’amore che resterà sempre, non passerà mai.
E quando ti penso lo sento arrivare quel brivido dentro che attraversa il cuore,
In questo silenzio sento la tua voce,
Calma, la rabbia, la sete, la fame e non cambierà
Quella complicità che da bambina cercavo nei tuoi occhi e che per sempre mi
Accompagnerà.
E se ti portassi via da quelle stelle
Per cancellare il tuo addio dalla mia pelle
Scalerei la terra e il cielo
Anche l’universo intero
Per averti ancora qui con me.
E ti parlo come se mi stessi accanto
Due gocce d’acqua non si perdono nel mare mai,
E poi guardami ma quanto ti assomiglio
Nelle mani, nell’amore che
Mettevi ogni volta nelle cose
Ed ogni giorno era sempre da festeggiare
Sono anch’io così
Noi così simili
Noi così simili
E se ti portassi via da quelle stelle
Per cancellare il tuo addio dalla mia pelle
Scalerei la terra e il cielo
Anche l’universo intero
Per averti ancora qui con me
E se ti portassi via da quelle stelle
Ti stringerei forte anch’io ora e per sempre
Scalerei la terra e il cielo
Anche l’universo intero
Per averti ancora qui con me
Quanta vita ruba il tempo
Oltre i limiti ti sento
So che sei ancora qui con me.
Con me, con me.',
                'created_at' => '2026-03-05 23:20:54',
                'updated_at' => '2026-03-06 12:28:09',
            ),
            10 => 
            array (
                'id' => 11,
                'edition_id' => 3,
                'title' => 'I romantici',
                'collaborators' => 'T. Paradiso, D. Petrella e D. Simonetta',
                'position' => 10,
                'lyrics' => 'Mi sveglio sotto la pioggia che cade
Spero mia figlia sia uguale a sua madre
Bellissima che non so come fa
A stare con uno che di notte accende la televisione,
Sempre lo stesso film, la stessa scena
Col volume a cannone
No, non so come fa
E voglio dirti ti amo prima di decollare
Ti prego non girarti quando scendo le scale
Che sarebbe stupendo non rovinare tutto
Posso portarti più in alto, più in alto, più in alto
Come hai fatto tu
Spero che ti arriverà
Davvero una musica dolce
Per i tuoi giorni malinconici
Vorrei avere un pianoforte in tasca
Solo per ricordarmi di noi
Ho il cuore appeso sulla giacca
Ogni volta che parlo di noi
I romantici guardano il cielo
I romantici guardano un treno che se ne va
Io quando bevo ci credo alle fate
Io non farò come ha fatto mio padre
Gelido
Non so come si fa
Ti darò sempre un bacio prima di partire
Se fumo faccio la doccia prima di dormire
Che sarebbe stupendo non rovinare tutto
Posso portarti più in alto, più in alto, più in alto
Come hai fatto tu
Spero che ti arriverà
Davvero una musica dolce
Per i tuoi giorni malinconici
Vorrei avere un pianoforte in tasca
Solo per ricordarmi di noi
Ho il cuore appeso sulla giacca
Ogni volta che parlo di noi
I romantici guardano il cielo
I romantici guardano un treno
Che corre via nella speranza di rivedersi nel futuro
Dove giocavano ragazzi con la palla contro il muro
E adesso non c’è nessuno
Non c’è più nessuno
Ma i romantici guardano il cielo
E ci credono davvero
Spero che ti arriverà
Una musica dolce per i tuoi giorni malinconici
Vorrei avere un pianoforte in tasca
Solo per ricordarmi di noi
Ho il cuore appeso sulla giacca
Ogni volta che parlo di noi
I romantici guardano il cielo
I romantici guardano un treno
Che se ne va',
                'created_at' => '2026-03-05 23:21:23',
                'updated_at' => '2026-03-06 12:28:22',
            ),
            11 => 
            array (
                'id' => 12,
                'edition_id' => 3,
                'title' => 'Poesie clandestine',
                'collaborators' => 'LDA, AKA 7even, A. Caiazza, V. Petrozzino, M. Villano, R. Romito e F. D\'Alessio',
                'position' => 11,
                'lyrics' => 'Se bastasse una sola canzone per vivere un attimo
Eternamente sarei condannato ad una folle bugia
È da questo dolore che nasce un amore catartico
Sembra fatto per noi
Ti ho dedicato poesie clandestine
Io che ti inseguo mentre te ne vai
Neanche le onde agitate stanotte sanno dove sei
E la frenesia che ti porta a svanire
Per evitare una notte di guai
Così avvolgente che rende reale l’effetto che fai
Ossaje che è una tarantella si nun ce putimm verè
Tu verrai sempre prima di me
Prima di lei
Perché
Solo così ci sentiamo a casa
È una metropoli solitaria
Questa storia che è piena di ma
Piena di se
Come te
Bella da farmi mancare l’aria
Tu sei Napoli sotterranea
Questa musica sale nel sangue carnale
D’amore si muore soltanto con te
Tu sei capace di farmi soffrire
Siamo in un limbo tra sogni e realtà
Ogni ferita dimostra soltanto quanto ti vorrei
Ma c’è chi giudica senza capire
Che non è giusto provare a metà
Un sentimento che basta da solo a parlare di noi
Piangeremo un mare, mare, mare
Negli occhi lacrime di sale
Ossaje che è una tarantella si nun ce putimm verè
Tu verrai sempre prima di me
Prima di lei
Perché
Solo così ci sentiamo a casa
È una metropoli solitaria
Questa storia che è piena di ma
Piena di se
Come te
Bella da farmi mancare l’aria
Tu sei Napoli sotterranea
Questa musica sale nel sangue carnale
D’amore si muore soltanto con te
Cosa c’è tra la vita e la morte
Se non un paradiso di colpe
Siamo anime in preda alla sorte
In fondo sai
Che nel bene o nel male sarai
La mia cura alla malinconia
Che mi prende e mi porta da te
Che mi prende e mi porta da te
Che mi prende e mi porta da te
Tu verrai sempre prima di me
Prima di lei
Perché
Solo così ci sentiamo a casa
È una metropoli solitaria
Questa storia che è piena di ma
Piena di se
Come te
Bella da farmi mancare l’aria
Tu sei Napoli sotterranea
Questa musica sale nel sangue carnale
D’amore si muore soltanto con te',
                'created_at' => '2026-03-05 23:22:28',
                'updated_at' => '2026-03-06 12:28:42',
            ),
            12 => 
            array (
                'id' => 13,
                'edition_id' => 3,
                'title' => 'Labirinto',
                'collaborators' => 'Luchè, D. Petrella, S. Tognini e R. Castagnola',
                'position' => 12,
                'lyrics' => 'Io non so come ci si lega ma so bene quanto vale un contratto
Nulla è per sempre nel rimorso l’odio annega potevamo rimanere in contatto
E invece niente siamo polvere sui mobili dentro una casa vuota
L’orgoglio è un brutto vizio ed io il bambino che ci gioca
Mai stato troppo in alto mai caduto nella droga
La notte è nera asfalto aspetto l’alba che mi trova
Un po’ di luce
Adesso che non riesco più ad immaginarti
E non ho voce
Nemmeno per gridare che lo so che parti
Solo per stare lontano via da me
Stai meglio lontano via da me
Non abbiamo più scuse
Quanto ci vuole per dimenticarsi
E quello che so di te
È che sei bella come una bugia
Detta per non piangere
Non piangere
Non dormirò più tra le braccia tue
In questo labirinto siamo in due
E quello che so di te
Nasconde un po’ di me
Anche se poi te ne vai
Non ti scordare di me
Di me
Di Noi
Di Noi
Anche se poi te ne vai
Non ti scordare di me
Di me
Di Noi
Di Noi
Non conta l’ego contano i concetti
Nessuno l’ha capito competiamo con noi stessi
Forse più salgo in alto più non vedo i miei difetti
Quando non so chi sono
Me lo urlano ai concerti
Di crisi già ne ho avute
L’inverno con le tute
Le corse e le cadute
Scontrarsi a mani nude
Mentre gli altri giocano
Io mi distinguo tra pochi che osano
E troverò
Un po’ di luce
Adesso che non riesco più ad immaginarti
E non ho voce
Nemmeno per gridare che lo so che parti
Solo per stare lontano via da me
Stai meglio lontano via da me
Non abbiamo più scuse
Quanto ci vuole per dimenticarsi
E quello che so di te
È che sei bella come una bugia
Detta per non piangere
Non piangere
Non dormirò più tra le braccia tue
In questo labirinto siamo in due
E quello che so di te
Nasconde un po’ di me
Anche se poi te ne vai
Non ti scordare di me
Di me
Di Noi
Di Noi
Anche se poi te ne vai
Non ti scordare di me
Di me
Di Noi
Di Noi
Le chiavi dell’uscita
Le ho messe nelle mani tue
Ma in questo labirinto siamo in due
Siamo in due
Anche se poi te ne vai
Non ti scordare di me
Di me
Di Noi
Di Noi
Anche se poi te ne vai
Non ti scordare di me
Di me
Di Noi',
                'created_at' => '2026-03-05 23:23:30',
                'updated_at' => '2026-03-06 12:28:54',
            ),
            13 => 
            array (
                'id' => 14,
                'edition_id' => 3,
                'title' => 'Resta con me',
                'collaborators' => 'A. Spigaroli, Nesli, M. Ungarelli, L. Cerri, S. Borrelli, F. Rossi, C. A. Dolci e D. Piccirillo',
                'position' => 13,
                'lyrics' => 'Volevo dirti in queste notti, ti penso ancora
Che la mia vita da quel giorno, è un’altra storia
E a volte per cambiare tutto basta una parola
Per diventare ciò che sono ho camminato sola
Sono una donna che non guarda in faccia niente
Mi hanno guardata male ma è il giudizio della gente
Quando ti senti stanca dalle delusioni
E l’unica certezza sono le canzoni
E il giorno che non torna di un inverno con l’amore che non è più qui
Ovunque sia l’errore nel miracolo di crescere così
Con il cuore in gola senza lacrime e paura
Con le braccia aperte per gridare
Resta con me
In questi tempi di odio
Tu resta con me
Anche se tutto questo ci cambierà
Adesso sono io a dirti che ho bisogno
A dirti in questo posto sembra tutto una follia
Resta con me, resta con me
Ho fatto sogni senza mai, chiudere gli occhi
Vissuto vite che non sai, se immaginarti
Ho visto uomini per bene, andare in pezzi
E ho visto uomini di strada, tornare onesti
E pezzi di giornali sparsi, nella mia testa
Una ragazza una chitarra, e una tempesta
Questi non sanno cosa provo dentro
Come una foglia sempre stata al vento
E il giorno che non torna di un inverno con l’amore che non è più qui
Ovunque sia l’errore nel miracolo di crescere così
Con il cuore in gola senza lacrime e paura
Con le braccia aperte per gridare
Resta con me
In questi tempi di odio
Tu resta con me
Anche se tutto questo ci cambierà
Adesso sono io a dirti che ho bisogno
A dirti in questo posto sembra tutto una follia
Resta con me, resta con me
E allora dimmi
Se conosci un modo
Per dimenticare i guai
Per noi che siamo stati
Sempre appesi a un filo
Aspettami nell’alba di questo mattino
Ho superato anni come questi
E avrei voluto dirti
Resta con me
In questi tempi di odio
Tu resta con me
Anche se tutto questo ci cambierà
Adesso sono io a dirti che ho bisogno
A dirti in questo posto sembra tutto una follia
Resta con me, resta con me',
                'created_at' => '2026-03-05 23:24:11',
                'updated_at' => '2026-03-06 12:29:03',
            ),
            14 => 
            array (
                'id' => 15,
                'edition_id' => 3,
                'title' => 'Sei tu',
                'collaborators' => 'Levante',
                'position' => 14,
                'lyrics' => 'Ah, non mi sento le gambe.
Ah, dove sono le braccia?
E mi manca il respiro,
Eppure sono viva,
Sento che sorrido
E io non l’ho deciso.
La vista mi abbandona un po’.
Cerco la mia postura,
Divento la paura,
Mi trema anche la gola,
La voce non mi trova,
La mani ora mi ingannano.
È così ci si innamora…
Fare spazio dove posto non si trova.
Ah, se potessi vederti coi miei occhi
Lacrimeresti tutto il mio stupore.
Ah, se potessi vestire la mia pelle
Vibrare del mio suono,
Sapresti perché non ho mai trovato il modo
Per spiegare che cos’è l’amore
Per me.
Se l’amore sei tu.
Ma ho già perso il controllo,
Non mi segue più il corpo.
E la testa che gira, mi gira
Si gira a fissare il pensiero fino a dove sono valente:
Il timore di niente.
Per mostrarsi anche nelle miserie,
Poi restare a contare le macerie.
Ah, se potessi vederti coi miei occhi
Lacrimeresti tutto il mio stupore
Ah, se potessi vestire la mia pelle
Vibrare del mio suono
Sapresti perché non ho mai trovato il modo
Per spiegare che cos’è l’amore
…Se l’amore sei tu.
Se l’amore sei tu.',
                'created_at' => '2026-03-05 23:24:45',
                'updated_at' => '2026-03-06 12:29:11',
            ),
            15 => 
            array (
                'id' => 16,
                'edition_id' => 3,
                'title' => 'Italia starter pack',
                'collaborators' => 'J-Ax, A. Bonomo e L. Buso',
                'position' => 15,
                'lyrics' => 'Dice sempre il vecchio del quartiere
Con molti più anni dei denti che ha
Sto paese lo capisci da un cantiere
Cinque dicono che fare, uno solo che lo fa
Meglio essere fuori che finire dentro
Tutti hanno qualcosa da nascondere
Santi in paradiso non ce n’è al momento
Più che avere fede è meglio un complice
Condividi la password
Che facciamo a metà il Wi-Fi
Canta un coro da stadio
Così sanno chi sei dovunque vai
Serve una brutta canzone che fa
Pappapparappa
Mollare tutto a metà
Qui per campare serve un po’ di culo sempre
È vietato ma fa niente
Ti passo la canna del gas
Italia Starter Pack
Dice l’uomo che mi fa la benza
Che chi guida non deve avere pietà
Sto paese è come con la precedenza
È solo di chi se la prende, non è mai di chi ce l’ha
E
Meno cose sai più sarai contento
Facciamoci una botta di felicità
Qui non si protesta per lo stipendio
Solo per la pizza con l’ananas
Per pagare c’è tempo
Tanto i debiti già ce li hai
Goditi sto momento
Che quando vai mica lo sai
Serve una brutta canzone che fa
Pappapparappa
Mollare tutto a metà
Qui per campare serve un po’ di culo sempre
È vietato ma fa niente
Ti passo la canna del gas
Italia Starter Pack
E ci dicono che siamo disonesti, furbetti
Tutti dei gran figli di mammà
Di leggi sbagliate e di caffè corretti
Ma abbiamo pure dei difetti
E in effetti
Serve una brutta canzone che fa
Pappapparappa
Mollare tutto a metà
Qui per campare serve un po’ di culo sempre
È vietato ma fa niente
Ti passo la canna del gas (del gas)
Italia Starter Pack',
                'created_at' => '2026-03-05 23:25:18',
                'updated_at' => '2026-03-06 12:29:21',
            ),
            16 => 
            array (
                'id' => 17,
                'edition_id' => 3,
                'title' => 'Uomo che cade',
                'collaborators' => 'Tredici Pietro, A. Di Martino e M. Spaggiari',
                'position' => 16,
                'lyrics' => 'L’imbarazzo che ci sarà tra noi due questa sera sarà bellissimo
Lo aspetto come l’ultima cena
Sarai bellissima ma è il minimo che aspetto da te
Sarà anche colpa del tuo aspetto
Ma di me non ho rispetto
E mi sporco
Sotto la pelle
Ho gli interni neri come una Mercedes
Tu ti sporchi
A restare con me e,
Chiusa in uno specchio,
C’è tutto il tuo riflesso e… e
Cambi forma
Alle parole
Come il fumo alle feste
Muovi tutto ciò che è attorno
Come un Dio della notte
Io per te potrei anche perdermi in un gioco di niente
Ma se ti farà male allora non pensare
Chiudimi la porta in faccia
Se rivedermi piangere un po’ ti rilassa
Dimmi che hai troppe
Cose da dire
Cose da fare
Fogli bruciare
Per rimanere ferma a guardare
L’uomo che cade, l’uomo che cade
Se solo tu
Se solo sapessi che voglio soltanto che resti
Andassi via
Di questi palazzi non vedo che spenti riflessi
Dalla città (dalla città)
Che non riposa mai (che brucia ormai)
Forse sapresti chi sei
Tu sei la fine del film
La grande esplosione
La notte che conquista il giorno un nuovo colore
Sei la lama
Trafitta
E io il tuo polmone
Ma se ti farà male allora non pensare
Chiudimi la porta in faccia
Se rivedermi piangere un po’ ti rilassa
Dimmi che hai troppe
Cose da dire
Cose da fare
Fogli bruciare
Per rimanere ferma a guardare
L’uomo che cade, l’uomo che cade
E faccio un’altra figuraccia
Come un bambino scivolato in una piazza
A volte siamo bravi a sparire
Per non rischiare
Di farci male
Se guardi su c’è un uomo che cade,
L’uomo che cade, un altro che cade
Se solo tu
Andassi via
Dalla città che fotte l’anima
Forse potresti sì forse puoi
Chiudermi la porta in faccia
Se rivedermi al Margine ti scioglie l’ansia
Dimmi che hai troppe cose da dire
Cose da fare
Fogli bruciare
Per rimanere ferma a guardare
L’uomo che cade, l’uomo che cade
E faccio un’altra figuraccia
Come un bambino scivolato in una piazza
A volte siamo bravi a sparire
Per non rischiare
Di farci male
Se guardi su c’è un uomo che cade,
L’uomo che cade, un altro che cade',
                'created_at' => '2026-03-05 23:25:55',
                'updated_at' => '2026-03-06 12:29:31',
            ),
            17 => 
            array (
                'id' => 18,
                'edition_id' => 3,
                'title' => 'Ossessione',
                'collaborators' => 'Samurai Jay, S. Sellitti, L. Stocco e V. Coppola',
                'position' => 17,
                'lyrics' => 'Nulla è per sempre
Ma il profumo tuo sulla mia pelle
Non passa mai, no mai
Sicuramente
Stai dormendo nel letto di un altro pure stasera
Marò che pena
Siamo sempre alle solite
Una tirata tutto il weekend
Tu mi nascondi le storie
E mi racconti un’altra bugia vuoi la verità
Ora penso a me
In mezzo a questo disordine
Sarà strano ma ti sento addosso
Come un’ossessione stanotte ritorni qui
Al centro delle mie fantasie
Ti amo solo di venerdì
Bailando contigo asì
Per un’ora ti sento mia
Non è amore è una malattia
Questo maledetto feeling
Questo maledetto feeling
Andale andale
Scatta un paio di foto poi mandale
Fammi vedere cosa indossi stasera
Poi facciamo l’alta marea
Sotto la luna piena
Non sei mai stata sincera
Non può durare una vita intera
Una storia se fa solo male
Tra noi sarà solamente
Una noche de sexo
Andamento lento
Non posso fermare il tempo
Questo feeling maledetto
Io lo sento addosso
Come un’ossessione stanotte ritorni qui
Al centro delle mie fantasie
Ti amo solo di venerdì
Bailando contigo asì
Per un’ora ti sento mia
Non è amore è una malattia
Questo maledetto feeling
Questo maledetto feeling
Devo correre correre correre correre correre
Ahahah
Devo correre correre correre correre correre
Come un’ossessione stanotte ritorni qui
Al centro delle mie fantasie
Ti amo solo di venerdì
Bailando contigo asì
Per un’ora ti sento mia
Non è amore è una malattia
Questo maledetto feeling
Questo maledetto feeling
Questo maledetto feeling',
                'created_at' => '2026-03-05 23:26:26',
                'updated_at' => '2026-03-06 12:29:42',
            ),
            18 => 
            array (
                'id' => 19,
                'edition_id' => 3,
                'title' => 'Ora e per sempre',
                'collaborators' => 'Raf e S. Riefoli',
                'position' => 18,
                'lyrics' => 'Un puntino in mezzo all’universo
Ero un alieno mi sentivo solo
Mi confondevo tra la gente perso
Dentro un astronave eternamente in volo
Mentre il mondo parlava al futuro
Me ne stavo fermo alla deriva
E il mio viso sorrideva comunque
Ma il cuore no
E tu per mano hai preso la mia vita
E camminando sulla via d’uscita
Senza parlare mi dicevi:
Ora e per sempre resterai
Ci sarai anche se mai più ti rivedrò
Sei nell’anima e lì ti cercherò
Quando mi mancherai
Ora e per sempre sarai.
Tra le pagine di un vecchio diario
Consumato come il nostro tempo
In un soffio di vento il nostro primo anniversario
Adesso è un eco lontano
Oggi il mondo è così diverso,
Niente è sicuro, tutto è controverso
E tra milioni di voci si nasconde la verità
E tu sei sempre la più bella
Il tempo ti sta una meraviglia
E ogni segno sulla pelle parla di te
Ora e per sempre amore mio
Era previsto che sarei rimasto io
Non avevamo molte probabilità
Ma siamo ancora qua
E tornerei indietro solo per un attimo
Al primo incontro per sentirne il brivido
Graffiti un po’ sbiaditi di un fuoco
Che non c’è più
Ma è parte di noi
Ora e per sempre
E mentre il mondo urla e stride
Vuoto di empatia
Noi non saremo parte di questa follia
Stringimi forte quando il sole sorgerà
Insieme ci troverà ci troverà
Quando l’alba verrà
Ora e per sempre sarà',
                'created_at' => '2026-03-05 23:26:53',
                'updated_at' => '2026-03-06 12:29:50',
            ),
            19 => 
            array (
                'id' => 20,
                'edition_id' => 3,
                'title' => 'Animali Notturni',
                'collaborators' => 'M. Ayane, S. Marletta, E. Roberts, G. Cremona, F. Mercuri e L. Faraone',
                'position' => 19,
                'lyrics' => 'Siamo tutti in pace con i sensi degli altri
Con i nostri invece non sappiamo che farci
Ed io che resto qui a perdermi
A parlare di te
Anche nei vicoli, vicinissimi
Non riusciamo a trovarci
E vorrei sapere cosa fai
Ma non è male questa nostalgia, lo sai
Che ci perdoniamo sempre
E siamo sconosciuti per la gente
Che non ci capirà mai
Lo vedi, io e te
La strada è una giungla
Puntiamo alla luna
Come animali notturni
Io e te
Facciamo paura
Troviamo una scusa
Per scomparire
Che dire
Ignora la parola fine
Che non so più a chi appartengo se vai via
Io e te
La strada è una giungla
Puntiamo alla luna
Come animali notturni
Sai potrei svegliarmi con te ogni mattina
E guardare l’alba come fosse la prima
Addormentiamoci davanti a un film
Se vuoi dormire con me
Quando mi guardi fai voragini
Ed io non mi difendo più
Fuori è pieno di persone, ma lo sai
Che nessuno ci capirà mai
Lo vedi, io e te
La strada è una giungla
Puntiamo alla luna
Come animali notturni
Io e te
Facciamo paura
Troviamo una scusa
Per scomparire
Che dire
Ignora la parola fine
Che non so più a chi appartengo se vai via
Io e te
La strada è una giungla
Puntiamo alla luna
Come animali notturni
Ti giuro che non so più
Come dirtelo
Ma appena tu te ne vai
Manca ossigeno
Il cielo è bellissimo
Dammi la mano che andiamo in un posto qualunque
Non serve sia lontanissimo
Per scomparire
Che dire
Ignora la parola fine
Che non so più a chi appartengo se vai via
Io e te
La strada è una giungla
Puntiamo alla luna
Come animali notturni',
                'created_at' => '2026-03-05 23:27:56',
                'updated_at' => '2026-03-06 12:29:58',
            ),
            20 => 
            array (
                'id' => 21,
                'edition_id' => 3,
                'title' => 'Ogni volta che non so volare',
                'collaborators' => 'E. Nigiotti, Pacifico e F. Pagnozzi',
                'position' => 20,
                'lyrics' => 'Tardi
Che non è più solo notte
Ma anche un po’ mattina
Tardi che non mi addormento
Chiudo gli occhi appena
Tardi che la dovrei smettere di parlare col soffitto
Di cascare tra i ricordi per rimanerci dentro
Il tempo vola maledetto
Veloce come un pizzicotto
Ecco la prima volta che ho fatto l’amore avevo 15 anni
Sopra un vecchio materasso tenevamo chiusi gli occhi
Così dolce e preoccupato
Così sempre attento
Forse adesso che ho imparato non è più lo stesso
Il tempo vola l’ho già detto
Anche in un orologio rotto
E mentre fuori scoppia un altro inferno
Da qualche parte adesso è già domani
Qualcuno è pronto e qualcun altro è perso
Prima di
Volare
Specchio forse i sogni non finiscono dove comincia la realtà
E c’è bisogno di dolore per un po’ di felicità
Lo pensiamo sempre tutti che sia meglio qualcun altro
E non vediamo dietro al vecchio i capelli da ragazzo
Il tempo corre quanto è stronzo
Sorpassa e poi ti ruba il posto
E mentre fuori brucia un altro inferno
Pochi minuti e poi sarà domani
Qualcuno è pronto e qualcun altro è perso
Prima di volare
I mostri che c’ho dentro
Che mi fanno cadere
Questa mania che devi andare solo bene
A chi mi salva ogni volta che tocco il fondo
A chi comunque vada mi rimane accanto
E se questa vita è un viaggio
Meno male siete qui
Ogni volta che non so
Volare
Ogni volta che non so
Volare
Ogni volta che non so
Volare',
                'created_at' => '2026-03-05 23:28:29',
                'updated_at' => '2026-03-06 12:30:06',
            ),
            21 => 
            array (
                'id' => 22,
                'edition_id' => 3,
                'title' => 'La felicità e basta',
                'collaborators' => 'M. Antonietta, Colombre e F. Catitti',
                'position' => 21,
                'lyrics' => 'È più facile perdonarci,
Se tieni a mente siamo tutti debuttanti.
“Sii te stessa e andrà tutto bene”,
Diceva la supermodella con la pelle splendida.
Quanto è bello essere te stessa sulle spiagge dei Caraibi,
E tu piangi sui diamanti in bikini tra i coralli.
Da quella chaise longue di pelle bianca
La tua vita non ti stanca.
Ma se abbiamo sete, abbiamo fame o siamo soli
La colpa non è nostra, non sono i nostri errori,
Non è così…
(I love you baby)
Non posso arrendermi.
(I love you baby)
Passo a prenderti.
Baby, facciamo insieme una rapina, baby,
Per riprenderci tutta la nostra vita.
Che cosa credi?
Credo che la felicità
Ce la prendiamo e basta.
Ce la prendiamo e basta.
È più facile se siamo insieme,
Mi difendo molto meglio dalle ansie passeggere
E dai pensieri nella testa… “Fare meglio, più convinta!”
Come diceva quella popstar sorridente in Valentino.
E a volte mi sento molto stanca,
E non riesco a tenere la testa alta.
Ma se abbiamo sete, abbiamo fame o siamo soli
La colpa non è nostra, non sono i nostri errori,
Non è così…
(I love you baby)
Passo a prenderti.
Baby, facciamo insieme una rapina, baby,
Per riprenderci tutta la nostra vita.
Che cosa credi?
Credo che la felicità
Ce la prendiamo e basta.
Baby, dall’ansia di un’aspettativa, baby
Scappiamo questo sabato mattina.
Che cosa credi?
Credo che la felicità
Ce la prendiamo e basta.
Ma se abbiamo sete, abbiamo fame o siamo soli
La colpa non è nostra, non siamo dei coglioni.
Baby, facciamo insieme una rapina, baby,
Per riprenderci tutta la nostra vita.
Che cosa credi?
Credo che la felicità,
Ce la prendiamo e basta.
Baby, dalla tristezza che è infinita, baby
Scappiamo questo sabato mattina.
Che cosa credi?
Credo che la felicità,
Ce la prendiamo e basta.
Baby,
Siamo ancora in piedi.
Credo che la felicità,
Ce la prendiamo e basta.
Ce la prendiamo e basta.',
                'created_at' => '2026-03-05 23:29:12',
                'updated_at' => '2026-03-06 12:30:15',
            ),
            22 => 
            array (
                'id' => 23,
                'edition_id' => 3,
                'title' => 'Prima o poi',
                'collaborators' => 'M. Bravi, Rondine e G. Grande',
                'position' => 22,
                'lyrics' => 'Lo so fumare a letto è un brutto vizio
Piangersi un po’ addosso
Poi la notte non dormo mai, mai
È vero
È vero che il bicchiere è mezzo pieno questa sera
Ma solo perché ho già bevuto una bottiglia intera
È che mi manchi da morire
E pure il cane non la smette di abbaiare
E sarà che ogni volta che ti penso
Ricomincio sempre
A scorrere le foto fino all’infinito
E ridere da solo
Pensa tu che scemo
E in fondo ancora ci spero
Che prima o poi
Smetterai
Che quando accendi la radio
Canti solo le canzoni ma degli altri
Dovresti vergognarti
Che dopo anni non la smetti di mancarmi
Ma guarda casa mia come è ridotta
Che non faccio i piatti da una settimana
Che non so l’ultima volta che ho fatto la spesa
Con il disco di Battisti ancora lì per terra
Con il cane che lo annusa perché un po’ ti cerca
Ogni volta che ti penso
Ricomincio sempre
A scorrere le foto fino all’infinito
E ridere da solo
Pensa tu che scemo
E in fondo ancora ci spero
Che prima o poi
Smetterai
Che quando accendi la radio
Canti solo le canzoni ma degli altri
Dovresti vergognarti
Che dopo anni non la smetti di mancarmi
Se dopo anni non la smetto
Sempre a prendermi l’acqua per strada
Che non ho l’ombrello nemmeno stasera
Tienimi la fronte
Ma pensa io che scemo
Che non penso che a te
E sono sotto casa tua
E ti vorrei citofonare ma
Ma non so più il tuo nome
A forza di chiamarti amore
Non so nemmeno adesso più chi sei
Ma prima o poi
Smetterai che quando accendi la radio
Canti solo le canzoni ma degli altri
Dovresti vergognarti
Che dopo anni non la smetti di mancarmi
Se dopo anni non la smetto di',
                'created_at' => '2026-03-05 23:29:46',
                'updated_at' => '2026-03-06 12:30:26',
            ),
            23 => 
            array (
                'id' => 24,
                'edition_id' => 3,
                'title' => 'Il meglio di me',
                'collaborators' => 'S. Tartaglino, A. Caputo, S. E. Reo, M. Davì, F. Renga e D. Sartore',
                'position' => 23,
                'lyrics' => 'Sai sono ritornato
Là dove le paure nascono
Non scapperò come ho sempre fatto
Ma se lo vorrai
Ti lascerò la mano
Che ancora non so camminare
In mezzo alle piccole cose
Con i pugni chiusi in tasca
Ed un muro nella testa
Non è stato facile
Ma a volte
Capita
Che sorride anche una lacrima
Perdona il peggio di me, il peggio di me, il peggio di me
Lascialo in macchina
Fra tutti i miei
Dettagli sei
Tu il meglio di me, il meglio di me, il meglio di me
Eccomi, eccoti
Il meglio di me
Ridere, cambiare
Imparare dagli sbagli
Guarire, vedere
Il tempo sulle mani
Non puoi spostare le strade
Ma in mezzo a una frase
Trovo la direzione
E ancora non so perdonare
Il tempo che cambia le cose
Ed i segni sulla faccia
Di una vita che ti spacca
Non è stato facile
Ma a volte
Capita
Che sorride anche una lacrima
Perdona il peggio di me, il peggio di me, il peggio di me
Lascialo in macchina
Fra tutti i miei
Dettagli sei
Tu il meglio di me, il meglio di me, il meglio di me
Eccomi, eccoti
Se tu fossi qui stasera
Con tutto quel coraggio che non ho
Le parole bruceranno in gola
Non ancora
Ancora no
Fra tutti i miei
Dettagli sei
Tu il meglio di me, il meglio di me, il meglio di me
Eccomi, eccoti
Il meglio di me',
                'created_at' => '2026-03-05 23:30:16',
                'updated_at' => '2026-03-06 12:30:35',
            ),
            24 => 
            array (
                'id' => 25,
                'edition_id' => 3,
                'title' => 'Opera',
                'collaborators' => 'G. Caccamo',
                'position' => 24,
                'lyrics' => 'Sulla terra siamo soli,
Solitari in compagnia,
Circondati da parole, parole,
Affidati a un’utopia.
Siamo santi e peccatori,
Naviganti e sognatori,
Un po’ satelliti,
Filosofi del niente.
Semplicemente la vita,
Semplicemente follia.
Cantami ancora il presente,
Nella vanità, io sono Musa, colore tagliente e poi Opera, l’Opera.
Ho viaggiato per il mondo
Tra oasi, deserti, e misteriose profezie
Dove il tempo è sospensione dell’eternità.
Ma poi sono le emozioni che ci cambiano,
Che ci spingono ad andare via da noi
Verso un’altra dimensione, tralasciando la ragione.
Semplicemente la vita,
Semplicemente pazzia.
Cantami ancora il presente
Nella vanità, io sono Musa, colore tagliente e poi Opera, l’Opera.
Io canto alla notte, respiro la notte,
Cammino di notte;
Sono Musa, colore tagliente e poi Opera',
                'created_at' => '2026-03-05 23:30:42',
                'updated_at' => '2026-03-06 12:30:44',
            ),
            25 => 
            array (
                'id' => 26,
                'edition_id' => 3,
                'title' => 'Ti penso sempre',
                'collaborators' => 'Chiello, T. Ottomano, F. Cigarini, S. Cigarini e M. Pigoni',
                'position' => 25,
                'lyrics' => 'Mi piacerebbe dirti che
Non ho pensato a te
È che non riesco a svegliarmi
E sapere che oramai non ci sei
Poi questo fottuto letto
Che non mi sembra fatto per due
Avevi detto che ero l’unico
Ed io ci avevo quasi creduto
Ti penso sempre
Voglio disinnamorarmi
E non è rimasto niente
Solo una scheggia di noi due
Pensi sia stato uno sbaglio
Venire sotto casa tua
Non ho trovato il coraggio
Di dirti quello che ho fatto
Ma almeno non ti ho detto una bugia
Una bugia
A cosa serve il tuo odio
Se la colpa è solo tua
Ti penso sempre
Voglio disinnamorarmi
E non è rimasto niente
Solo una scheggia di noi due
Quindi amarsi a cosa serve?
Se finiamo per odiarci
Quanto tempo che si perde
A dirsi ti amo e dopo addio
Pensi sia stato uno sbaglio
Lasciami sciogliere nell’agonia
Non meritavo uno schiaffo
Mi hai messo in bocca un’altra tua bugia
Lasciami sciogliere nell’agonia
Nell’agonia
Se ti rivedo ti',
                'created_at' => '2026-03-05 23:31:16',
                'updated_at' => '2026-03-06 12:30:54',
            ),
            26 => 
            array (
                'id' => 27,
                'edition_id' => 3,
                'title' => 'Voilà',
                'collaborators' => 'A. Bonomo, E. Roberts e P. Celona',
                'position' => 26,
                'lyrics' => 'Elettra, Elettra Lamborghini
Ma che notte
Che casino
Tipo cocktail
Un po’ di me un po’ di te
Nessun dorma
Fai il cretino
Io l’oﬀesa e poi damblé
Litigare anche di sabato sera
Ballando con le stelle e noi con gli occhi amarena
Tu mi prendi la mano,
Voglio, sì, ma non mi va, va
Mamma mia che rabbia
La porta che fa bam bam
Solita bagarre
E poi ci sale sale su
Quest’aria di mare
Un po’ ti odio un po’ I love you
Ma che c’è di male
Sai già cosa fare
Dai comincia tu
E allora viva viva viva la Carrà
Ballare e poi finire giù per terra
Viva l’amore amore amore che si fa
Al buio e la televisione accesa
Fino all’alba
Come due gatti dietro a qualche bar
Su una cabrio senza targa
Noi due sotto un cielo a pois
Così chic
Così hard
Vieni qui
Voilà, voilà, voilà, voilà
Mi hanno detto
E mi piace
Che in un letto
Poi si fa la pace
(Tu lo sai, tu lo sai) che i baci
Sono come le ciliegie
Non hai fame
Sì però, sì però ti viene
E poi si cade cade giù
Come quando piove
Un po’ ti odio un po’ I love you
Non ci vuol un Nobel
Sai già cosa fare
Dai comincia tu
E allora viva viva viva la Carrà
Ballare e poi finire giù per terra
Viva l’amore amore amore che si fa
Al buio e la televisione accesa
Fino all’alba
Come due gatti dietro a qualche bar
Su una cabrio senza targa
Noi due sotto un cielo a pois
Così chic
Così hard
Vieni qui
Voilà, voilà, voilà
Altro che chiacchiere
Spegni tutto in questa notte di paillettes
Eccomi qua
E allora viva viva viva la Carrà
Ballare e poi finire giù per terra
Fino all’alba
Come due gatti dietro a qualche bar
Su una cabrio senza targa
Noi due sotto un cielo a pois
Così chic
Così hard
Vieni qui
Voilà, voilà, voilà, voilà',
                'created_at' => '2026-03-05 23:31:51',
                'updated_at' => '2026-03-06 12:31:03',
            ),
            27 => 
            array (
                'id' => 28,
                'edition_id' => 3,
                'title' => 'Ai ai',
                'collaborators' => 'D. D\'Amico, G. Fazio, P. Bagni ed E. Roberts',
                'position' => 27,
                'lyrics' => 'Prima di entrare in casa
Stavo un’ora a cercare di toglier la sabbia
Autostrada Adriatica
Dalla costa si vede l’Africa e lei che si tuffa
Ti prego, guardala
Ha più curve di Gardaland
Quando mi ha detto che tornerà in Francia
Uffa
Ho avuto il mal di pancia
AI AI
AI AI,
Cosa mi fai?
Mi dici vieni qui e poi te ne vai
- Bye Bye
Ma come - Bye?
Ho perso il tuo contatto, me lo ridai?
AI AI
Il Bel Paese ha così buongusto
Che pure il meteo non è mai brutto
È uno stivale però da diva
Che si fa il bagno nell’olio d’oliva
Dice il Vangelo - Darai da bere
A chi è straniero ma ha le stesse vene
Prendi sul serio una bollicina
E via il pensiero via la pellicina
Ho letto sul giornale
Che certe cose non puoi ancora farle con l’AI
La pelle dà un effetto eccezionale
Mi hai fatto stare proprio bene, me lo rifai?
AI AI
AI AI,
Cosa mi fai?
Mi dici vieni qui e poi te ne vai
- Bye Bye
Ma come - Bye?
Ho perso il tuo contatto, me lo ridai?
AI AI
Ho litigato con un dj
Suonava solo la hit parade
Sai, se metti le canzoni giuste
La festa vola come Nureyev
In Italia, troppa arte
Piedi più belli delle scarpe
Prendiamo un giorno di riposo
Dai, trova il modo, Carlos Raposo
Ho letto sul giornale
Che certe cose non puoi ancora farle con l’AI
La pelle dà un effetto eccezionale
Mi hai fatto stare proprio bene, me lo rifai?
AI AI
AI AI,
Cosa mi fai?
Mi dici vieni qui e poi te ne vai
- Bye Bye
Ma come - Bye?
Ho perso il tuo contatto, me lo ridai?
Ho fatto un brutto sogno
Ma sembrava reale
Mi bagnavo nel mare
Però ne uscivo sporco
E giravamo il mondo
Però senza toccare
Mi ha fatto molto male
Ma mi è piaciuto molto
Ama ciò che non ti piace
È la chiave per la pace
Ma la password salvata mi sembra sbagliata
O la linea è saltata e ci prende fuoco casa
A me mi ha rovinato la rete
Altrimenti avrei fatto il prete
Avrei lasciato il paese fuggendo via
A cercare fortuna in Albania
AI AI,
Cosa mi fai?
Mi dici vieni qui e poi te ne vai
- Bye Bye
Ma come - Bye?
Ho perso il tuo contatto, me lo ridai?
AI AI
Me lo ridai?
AI AI
Me lo ridai?
AI AI
Me lo ridai?
AI AI
Me lo ridai?
AI AI',
                'created_at' => '2026-03-05 23:32:24',
                'updated_at' => '2026-03-06 12:31:12',
            ),
            28 => 
            array (
                'id' => 29,
                'edition_id' => 3,
                'title' => 'Naturale',
                'collaborators' => 'F. Savini, M. Davì, A. Casali e L. Gassmann',
                'position' => 28,
                'lyrics' => 'Stella che non piange mai
Nemmeno quando è sola
Mi scivolava tra le mani
Come dalla bocca una parola
Non so fare le valigie
E lei vuole partire
Io che sognavo strade aperte tra le gallerie
Volevo una casa francese sulle Tuileries
Ma lei odiava i quadri e le piramidi
E noi
Ci siamo trovati, lasciati poi ritrovati con altri
Riempiti di baci che mi sembravano schiaffi
E non ne vale la pena, ma non vale, ma non vale…
Ma non vale se ora mi guardi
Con quegli occhi lucidi e mi macchi
La felpa con il nero dell’eyeliner
Tu che sei più bella al naturale
Se ci rivedremo tra vent’anni
Avremo ancora voglia di spaccarci il cuore a metà
Ma la verità è che fare la pace alla fine è più naturale
Stella che non piange mai
O almeno non con me
Ma abbiam passato cinque estati
In motorino tra i semafori e i tram
Che Roma ad agosto sembra l’Antartide
Una cartolina senza immagine
E quanto amavo le sue guance pallide
Non arrossivano mai
E noi
Ci siamo trovati, lasciati, poi ritrovati con altri
Riempiti di baci che mi sembravano schiaffi
E non…
Ma non vale se ora mi guardi
Con quegli occhi lucidi e mi macchi
La felpa con il nero dell’eyeliner
Tu che sei più bella al naturale
Se ci rivedremo tra vent’anni
Avremo ancora voglia di spaccarci il cuore a metà
Ma la verità è che fare la pace alla fine è più naturale
Stella adesso piange con le amiche e con sua madre
Con gli sconosciuti per strada e con il suo cane
Che ci siamo fatti così male, così male, così male
Così, senza volerlo
Ma non vale se ora mi guardi
Con quegli occhi lucidi e mi macchi
La felpa con il nero dell’eyeliner
Tu che sei più bella
Ma non vale se ora mi manchi, ma non vale se
Se ci ritroveremo tra vent’anni a fare l’amore che in fondo è più naturale',
                'created_at' => '2026-03-05 23:32:51',
                'updated_at' => '2026-03-06 12:31:22',
            ),
            29 => 
            array (
                'id' => 30,
                'edition_id' => 3,
                'title' => 'Le cose che non sai di me',
                'collaborators' => 'M. Sattei, D. Mattei, A. Donadei e E. Brun',
                'position' => 29,
                'lyrics' => 'Quando sei con me
Il cielo sai che c’è
Mi ricorda l’estate
E Trastevere
Inizia a dipingere
Sopra tutte le case
Di quel rosa chiaro
Zucchero filato
Non sai quante volte
Ho cercato di volare via lontano
Sembra facile
Questa vita che
Mischia tutte le carte
Noi bambini che
Pensano a ridere
Con dentro sogni giganti
E ci addormentiamo
Qui davanti a un film
Non sai quante volte
Penso domani ce ne andiamo via
Ma quanto è bella la follia?
Tutte le notti a dirsi
Le cose che non sai di me
La voce tua nei giorni tristi
Guarisce il mio disordine
Io vorrei
Solo parlarti d’amore
Nel silenzio di ciò che non dico
Mentre mi perdo nel tuo sorriso
Per sempre
Quando son con me
Quelle lacrime
Sono la pioggia d’estate
Sopra il tetto guardo quella gente che
Si abbraccia e ride e sembra semplice
E le stelle quei pensieri che nel cielo
Restano per non scordarli mai
È tutto ciò che non ho fatto mai
È vivere la vita come vuoi
Tutte le notti a dirsi
Le cose che non sai di me
La voce tua nei giorni tristi
Guarisce il mio disordine
Io vorrei
Solo parlarti d’amore
Nel silenzio di ciò che non dico
Mentre mi perdo nel tuo sorriso
Ma in fondo
Tutte le volte che ho paura
E mi sento perdere
Ma poi con te
So sentire
Anche quando inizia a piovere
Sopra quelle domande, forse
Tu resta qui
Tutte le notti a dirsi
Le cose che non sai di me
La voce tua nei giorni tristi
Guarisce il mio disordine
Tutte le notti a dirsi
Le cose che non sai di me
La voce tua nei giorni tristi
Guarisce il mio disordine
Io vorrei
Solo parlarti d’amore
Nel silenzio di ciò che non dico
Mentre mi perdo nel tuo sorriso
Per sempre',
                'created_at' => '2026-03-05 23:33:31',
                'updated_at' => '2026-03-06 12:31:31',
            ),
            30 => 
            array (
                'id' => 31,
                'edition_id' => 3,
                'title' => 'Avvoltoi',
                'collaborators' => 'E. Brock, L. Iaschi e V. Leone',
                'position' => 30,
                'lyrics' => 'Ci ho provato lo sai
Ma non riesco a non pensare a un noi
Tanto so già che cosa dirai
Rovineremmo tutto
La nostra amicizia
Vale più di così
E fingendo
Che nessuno dei due lo sapesse
A far finta che non ci sia niente
Mi mordo la lingua fino a sanguinare
Ripetendoti che
Ma se lo sai
Che scegli sempre quello che ti farà male
E resti sola dentro un letto da rifare
Perché è più facile per te farti spogliare
Che spogliarti il cuore
Le parole si annodano in gola
E ti asciugo il mascara che cola
Per quell’uomo che non vale niente
E ci caschi ancora e ancora
Sei tu
Che non impari mai
E ci vai a letto
E poi torni da me a piangere sul petto
Bella come sei
Non potrai fidarti mai
Ma se lo sai
Che scegli sempre quello che ti farà male
E resti sola dentro un letto da rifare
Perché è più facile per te farti spogliare
Spogliare
Spogliare
È inutile che perdi il tempo
Consumandoti quegli occhi
Così belli
Piangendo per quel bastardo
Dicono sempre di esser degli eroi
Ma ti girano intorno come avvoltoi
Na na na na na na
Na na na na na na
Ma se lo sai
Che scegli sempre quello che ti farà male
E resti sola dentro un letto da rifare
Per la paura che ti fa sempre scappare
Da tutto questo amore',
                'created_at' => '2026-03-05 23:34:02',
                'updated_at' => '2026-03-06 12:31:42',
            ),
            31 => 
            array (
                'id' => 32,
                'edition_id' => 4,
                'title' => 'Battito',
                'collaborators' => 'Fedez, F. Abbate, A. La Cava e Cripo',
                'position' => 4,
                'lyrics' => 'Ti porterei in terapia
Solo per farti capire, il male che fai
Spero che sia un’amnesia
Spengo la luce e mi vieni a trovare
Fluoxetina, poca saliva
Quando mi trovo a parlare di te
Sei la carne è viva
La mente è schiva
Vaga nel buio più buio che c’è
Sento un pugno nello stomaco
Le paranoie hanno bisogno di troppe attenzioni
Forse mento
Quando ti dico
Sto meglio
Stringimi avvolgimi
Poi lasciami respirare
Serotonina cercasi
Illudimi
Dentro i miei occhi
Guerra dei mondi
Tu mi conosci
Meglio di me
Vorrei guarire
Ma non credo
Vedo nero pure il cielo
Vetri rotti schegge negli occhi
Prenditi i sogni
Pure i miei soldi
Basta che resti lontana da me
Vedo il bicchiere
Mezzo pieno
Con due gocce di veleno
Tu mi fotti
Respiri corti
E aumenta pure il battito, battito
Battito, battito
Battito, battito, battito, battito, battito accelerato affronto una guerra da disarmato
Ho alzato barriere di filo spinato
Ma le ho sempre messe nel lato sbagliato
Mi sento annullato
Dottore che cosa mi ha dato
Socialmente accettato
Anestetizzato
Da un metodo legalizzato
Calmati
Sto contando i battiti
Siamo così fragili
Ci feriamo anche sfiorandoci
Ti ho odiata te lo giuro
Facciamo un po’ ciascuno
Basta un po’ di zucchero e va giù pure il cianuro
Sento un pugno nello stomaco (nello stomaco)
Le paranoie hanno bisogno di troppe attenzioni
Forse mento
Quando ti dico
Sto meglio
Dentro i miei occhi
Guerra dei mondi
Tu mi conosci
Meglio di me
Vorrei guarire
Ma non credo
Vedo nero pure il cielo
Vetri rotti schegge negli occhi
Prenditi i sogni
Pure i miei soldi
Basta che resti lontana da me
Vedo il bicchiere
Mezzo pieno
Con due gocce di veleno
Tu mi fotti
Respiri corti
E aumenta pure il battito, battito
Sembra di galleggiare
Sopra ad un mare statico, statico
Stringimi avvolgimi
Poi lasciami respirare
Serotonina cercasi
Uccidimi
Dentro i miei occhi
Guerra dei mondi
Tu mi conosci
Meglio di me
Vorrei guarire
Ma non credo
Vedo nero pure il cielo
Vetri rotti schegge negli occhi
Prenditi i sogni
Pure i miei soldi
Basta che resti lontana da me
Vedo il bicchiere
Mezzo pieno
Con due gocce di veleno
Tu mi fotti
Respiri corti
E aumenta pure il battito, battito
Battito, battito',
                'created_at' => '2026-03-06 00:55:39',
                'updated_at' => '2026-03-06 13:58:38',
            ),
            32 => 
            array (
                'id' => 33,
                'edition_id' => 4,
                'title' => 'Balorda nostalgia',
                'collaborators' => 'F. Olivieri, J. Boverod, P. Pasini',
                'position' => 1,
                'lyrics' => 'Magari non sarà
Nemmeno questa sera
La sera giusta per tornare insieme
Tornare a stare insieme
Magari non sarà
Nemmeno questa sera
Me l’ha detto la signora, là aﬀacciata al quarto piano
Con la sigaretta in bocca,
Mentre stendeva il suo bucato
Io le ho risposto che
Vorrei
Vorrei
Vorrei
Vorrei
Vorrei
Vorrei
Tornare a quando
Ci bastava
Ridere, piangere, fare l’amore
E poi stare in silenzio per ore
Fino ad addormentarci sul divano
Con il telecomando in mano
Non so più come fare senza te
Te che mi fai, vivere e dimenticare,
Tu che mentre cucini ti metti a cantare
E tu chiamala se vuoi la ﬁne
Ma come te lo devo dire
Sta vita non è vita senza te
Ma sai che questa sera
Balorda nostalgia
Mi accendo la tv
Solo per farmi compagnia
Che bella tiritera…
Beh insomma
Ti sembra la maniera
Che vai e mi lasci qua
Ti cerco ancora in casa quando mi prude la schiena
E metto ancora un piatto in più quando apparecchio a cena
So soltanto che vorrei,
Vorrei
Vorrei
Vorrei
Sì vorrei
Vorrei
Tornare a quando
Ci bastava
Ridere, piangere, fare l’amore
E poi stare in silenzio per ore
Fino ad addormentarci sul divano
Con il telecomando in mano
Non so più come fare senza te
Te che mi fai, vivere e dimenticare,
Tu che mentre cucini ti metti a cantare
E tu chiamala se vuoi la ﬁne
Ma come te lo devo dire
Sta vita non è vita senza te
Ma chissà perché
Oh, sta vita non è vita senza te
Magari non sarà
Magari è già ﬁnita
Però ti voglio bene
Ed è stata tutta vita',
                'created_at' => '2026-03-06 01:56:38',
                'updated_at' => '2026-03-06 13:58:11',
            ),
            33 => 
            array (
                'id' => 34,
                'edition_id' => 4,
                'title' => 'Volevo essere un duro',
                'collaborators' => 'L. Corsi, T. Ottomano',
                'position' => 2,
                'lyrics' => 'Volevo essere un duro
Che non gli importa del futuro
Un robot, un lottatore di sumo
Uno spaccino in fuga da un cane lupo
Alla stazione di Bolo\'
Una gallina dalle uova d\'oro
Però non sono nessuno
Non sono nato con la faccia da duro
Ho anche paura del buio
Se faccio a botte le prendo
Così mi truccano gli occhi di nero
Ma non ho mai perso tempo
È lui che mi ha lasciato indietro
Vivere la vita
È un gioco da ragazzi
Me lo diceva mamma ed io
Cadevo giù dagli alberi
Quanto è duro il mondo
Per quelli normali
Che hanno poco amore intorno
O troppo sole negli occhiali
Volevo essere un duro
Che non gli importa del futuro, no
Un robot, medaglia d\'oro di sputo
Lo scippatore che t\'aspetta nel buio
Il re di Porta Portese
La gazza ladra che ti ruba la fede
Vivere la vita
È un gioco da ragazzi
Me lo diceva mamma ed io
Cadevo giù dagli alberi
Quanto è duro il mondo
Per quelli normali
Che hanno poco amore intorno
O troppo sole negli occhiali
Volevo essere un duro
Però non sono nessuno
Cintura bianca di judo
Invece che una stella, uno starnuto
I girasoli con gli occhiali mi hanno detto
"Stai attento alla luce"
E che le lune senza buche
Sono fregature
Perché in fondo è inutile fuggire
Dalle tue paure
Vivere la vita è un gioco da ragazzi
Io, io volevo essere un duro
Però non sono nessuno
Non sono altro che Lucio
Non sono altro che Lucio',
                'created_at' => '2026-03-06 01:57:15',
                'updated_at' => '2026-03-06 13:58:20',
            ),
            34 => 
            array (
                'id' => 35,
                'edition_id' => 4,
                'title' => 'L\'albero delle noci',
                'collaborators' => 'D. Brunori',
                'position' => 3,
                'lyrics' => 'Sono cresciute veloci le foglie sull\'albero delle noci
E nei tuoi occhi di mamma adesso splende una piccola fiamma
Io come sempre canguro fra il passato e il futuro
Scrivo canzoni d\'amore alla ricerca di un porto sicuro
E come un ragioniere in bilico fra il dare e l\'avere
Faccio partite doppie persino col mio cuore
Come si può cadere in basso
Da una distanza siderale
Sono passati veloci questi anni feroci
E nel mio cuore di padre il desiderio adesso è chiuso a chiave
E tu sei stata bravissima all\'esame di maturità
Ad unire i puntini fra la mia bocca e la verità
Che tutto questo amore io non lo posso sostenere
Perché conosco benissimo le dimensioni del mio cuore
E posso navigare anche in assenza di stella polare
Vorrei cambiare la voce
Vorrei cantare senza parole
Senza mentire
Per paura di farti soffrire
Vorrei cantarti l\'amore, amore
Il buio che arriva nel giorno che muore
Senza cadere
Nella paura di farti male
Sono cresciuto in una terra crudele dove la neve si mescola al miele
E le persone buone portano in testa corone di spine
Ed ho imparato sin da bambino la differenza fra il sangue e il vino
E che una vita si può spezzare per un pezzetto di carne o di pane
E a tutta questa felicità io non mi posso abituare
Perché conosco il sogno del faraone
Le vacche grasse e le vacche magre
E che si può cadere da una distanza siderale
Vorrei cambiare la voce
Vorrei cantare senza parole
Senza mentire
Per paura di farti soffrire
Vorrei cantarti l\'amore, amore
La notte che arriva nel giorno che muore
Senza cadere
Nella paura di farti male
Sono cresciuti troppo veloci questi riccioli meravigliosi
E ora ti vedo camminare con la manina in quella di tua madre
E tutta questa felicità forse la posso sostenere
Perché hai cambiato l\'architettura e le proporzioni del mio cuore
E posso navigare sotto una nuova stella polare',
                'created_at' => '2026-03-06 01:57:46',
                'updated_at' => '2026-03-06 13:58:30',
            ),
            35 => 
            array (
                'id' => 36,
                'edition_id' => 4,
                'title' => 'Quando sarai piccola',
                'collaborators' => 'S. Cristicchi, N. Brunialti e Amara',
                'position' => 5,
                'lyrics' => 'Quando sarai piccola ti aiuterò a capire chi sei
Ti starò vicino come non ho fatto mai
Rallenteremo il passo se camminerò veloce
Parlerò al posto tuo se ti si ferma la voce
Giocheremo a ricordare quanti figli hai
Che sei nata il 20 marzo del \'46
Se ti chiederai il perché di quell\'anello al dito
Ti dirò di mio padre ovvero tuo marito
Ti insegnerò a stare in piedi da sola, a ritrovare la strada di casa
Ti ripeterò il mio nome mille volte perché tanto te lo scorderai
Eeee... è ancora un altro giorno insieme a te
Per restituirti tutto quell\'amore che mi hai dato
E sorridere del tempo che non sembra mai passato
Quando sarai piccola mi insegnerai davvero chi sono
A capire che tuo figlio è diventato un uomo
Quando ti prenderò in braccio
E sembrerai leggera come una bambina sopra un\'altalena
Preparerò da mangiare per cena, io che so fare il caffè a malapena
Ti ripeterò il tuo nome mille volte fino a quando lo ricorderai
Eeee... è ancora un altro giorno insieme a te
Per restituirti tutto, tutto il bene che mi hai dato
E sconfiggere anche il tempo che per noi non è passato
Ci sono cose che non puoi cancellare
Ci sono abbracci che non devi sprecare
Ci sono sguardi pieni di silenzio
Che non sai descrivere con le parole
C\'è quella rabbia di vederti cambiare
E la fatica di doverlo accettare
Ci sono pagine di vita, pezzi di memoria
Che non so dimenticare
Eeee... è ancora un altro giorno insieme a te
Per restituirti tutta questa vita che mi hai dato
E sorridere del tempo e di come ci ha cambiato
Quando sarai piccola ti stringerò talmente forte
Che non avrai paura nemmeno della morte
Tu mi darai la tua mano, io un bacio sulla fronte
Adesso è tardi, fai la brava
Buonanotte',
                'created_at' => '2026-03-06 01:58:22',
                'updated_at' => '2026-03-06 13:58:47',
            ),
            36 => 
            array (
                'id' => 37,
                'edition_id' => 4,
                'title' => 'La cura per me',
                'collaborators' => 'R. Fabbriconi, Giorgia e Michelangelo',
                'position' => 6,
                'lyrics' => 'Dentro la mano una carezza sul viso
Senz\'anima questo sorriso
Che hai cercato, che hai cercato
Più ti avvicini e più io mi allontano
E i ricordi se ne vanno piano
Su e giù come un ascensore
Ogni mia stupida emozione
E no, non cambierà
Dirti una bugia o la verità
Per me fare una follia è come la normalità
Non so più quante volte ti ho cercato
Per quegli occhi, per quegli occhi che fanno da luna
Non so più quante notti ti ho aspettato
Per finire a ingoiare tutta la paura
Di rimanere sola
In questa stanza buia
Solo tu sei la cura per me
Tutto passa
Ma scordarti non so ancora come si faccia
Qualcosa lo dovevo rovinare
Nascondo una lacrima nel mare, ferito
Voglio andare avanti all\'infinito
Trovarti dentro gli occhi di un cane smarrito
E no, non cambierà
Dirti una bugia o la verità
Per me fare una follia è come la normalità
Non so più quante volte ti ho cercato
Per quegli occhi, per quegli occhi che fanno da luna
Non so più quante notti ti ho aspettato
Per finire a ingoiare tutta la paura
Di rimanere sola
In questa stanza buia
Solo tu sei la cura per me
No che non ho voglia
Non ho voglia di rincorrerti
Seguire la tua ombra e salire fino sugli alberi
Guardando il cielo sapendo che lo stai guardando
Ora anche tu
Per me sei la luna
Per me sei la cura
Per me sei avventura
Ma non sei nessuno
Spengo la paura
Di rimanere sola
Per quegli occhi
Per quegli occhi che fanno da luna
Non so più quante notti ho aspettato
Per finire a ingoiare tutta la paura
Di rimanere sola
In questa stanza buia
Non sarò mai più sola
Per me',
                'created_at' => '2026-03-06 01:59:01',
                'updated_at' => '2026-03-06 13:58:55',
            ),
            37 => 
            array (
                'id' => 38,
                'edition_id' => 4,
                'title' => 'Incoscienti giovani',
                'collaborators' => 'A. Lauro, S. P. Manzari, P. Antonacci, D. Simonetta, M. Ciceroni, D. Nelli e G. Calculli',
                'position' => 7,
                'lyrics' => 'Oh, bambina
Tutto quello che hai passato è un\'università
E tuo padre non tornava la sera
L\'hai visto solo di schiena
Lui non sa cosa è stare insieme
No, lo so gli vuoi bene
L\'amore è come una pioggia sopra Villa Borghese
E noi stiamo annegando, naufragando, è un romanzo
Sono solo a fare a botte con gli amici miei
Sto strisciando verso il letto e non ci sei
Amore mio, veramente
Se non mi ami muoio giovane
Ti chiamerò da un Autogrill
Tra cento vite o giù di lì
Di amore muori veramente
Se non ti amo fallo tu per me
Ti cercherò in un vecchio film
Per sempre noi incoscienti giovani
Incoscienti giovani
Oh, bambina
Dormivamo in un Peugeot
Sì, noi due ladri di fiori
E ti ricordi o no
Noi prima
A dirsi, "Mai una vita come i tuoi"
Sì, piuttosto disperati come noi
Amore mio, veramente
Se non mi ami muoio giovane
Ti chiamerò da un Autogrill
Tra cento vite o giù di lì
Di amore muori veramente
Se non ti amo fallo tu per me
Ti cercherò in un vecchio film
Per sempre noi incoscienti giovani
Maledetti giovani (a fumare in quel bar)
Noi che a pezzi, giovani (noi due pieni di guai)
Maledetti, noi incoscienti a dirsi ancora
"Fammi una carezza, amore mio"
"Ma che mi faccia male"
Mezza sigaretta e dopo addio
Per noi incoscienti e giovani
Noi due orfanelli alla roulette
Siamo a Las Vegas sotto un LED
Amore mio, veramente
Se non mi ami muoio giovane
Ti chiamerò da un autogrill
Per sempre noi incoscienti giovani
Incoscienti giovani',
                'created_at' => '2026-03-06 01:59:46',
                'updated_at' => '2026-03-06 13:59:05',
            ),
            38 => 
            array (
                'id' => 39,
                'edition_id' => 4,
                'title' => 'Viva la vita',
                'collaborators' => 'F. Gabbani, Pacifico, C. Gabelloni, D. Simonetta e G. Zito',
                'position' => 8,
                'lyrics' => 'Ma non lo vedi?
E non conta se non ci credi
Che siamo un momento
Tra sempre e mai più
Come una poesia
Dentro l\'eternità per una botta e via
Sarà che una bugia
Dice la verità più della verità
Ma com\'è limpida
Com\'è domenica
Viva la vita così com\'è
Viva la vita questa vita che
È solo un attimo
Un lungo attimo
Viva la vita finché ce n\'è
Viva la vita questa vita che
È solo un battito
Un lungo battito
A darsi il cambio
Ad aiutarsi
A consumarsi al vento
Assomigliarsi
Pelle e ossa
Stesso fuoco dentro
Insieme due paralisi faranno un movimento
Insieme non si perderanno mai
E dimmi una bugia
La mezza verità, che tanto poi si sa...
Che cosa vuoi che sia
Su tutti i lividi farà da anestesia
E se ci brucerà
E se ci porta via, e se ci porta via
Viva la vita così com\'è
Viva la vita questa vita che
È solo un attimo
Un lungo attimo
Viva la vita finché ce n\'è
Viva la vita questa vita che
È solo un battito
Un lungo battito
A darsi il cambio
Ad aiutarsi
A consumarsi al vento
Assomigliarsi
Pelle e ossa
Stesso fuoco dentro
Insieme due paralisi faranno movimento
Insieme due romantici alle porte dell\'inferno
Viva la vita così com\'è
Viva la vita, questa vita che
È solo un attimo, un lungo attimo
Ma in fondo tu lo sai quello che sento
È vivere davvero ogni momento',
                'created_at' => '2026-03-06 02:00:19',
                'updated_at' => '2026-03-06 13:59:14',
            ),
            39 => 
            array (
                'id' => 40,
                'edition_id' => 4,
                'title' => 'Lentamente',
                'collaborators' => 'Irama, R. Fabbriconi, Michelangelo e G. Colonnelli',
                'position' => 9,
                'lyrics' => 'Non ti ricordi che
Sei stata tu crudele, crudele, crudele
Fredda come la neve, la neve, la neve
Perché era solo una scusa
L\'idea che tra noi era soltanto sesso
Come se tu
Almeno tu
Col tuo profumo d\'estate
Tornassi un attimo
E c\'è qualcosa che ti agita
Smetti di piangere, mi guardi che sei fradicia
E mi strattoni mentre mi tiri la manica
Cerco il tuo sguardo, ma ti giri dall\'altra parte
Ma non so più come dirtelo
Vederci, appuntamenti nascosti in ristoranti costosi
Ma non cambia niente
Lentamente si sta spegnendo
Ogni fottuto sentimento
È meglio fare l\'amore se l\'amore è un incendio
Speravi che i sensi di colpa finissero
Ma torneranno quando tornerò, oh-oh
E il tuo sorriso mi mastica
Ballavi nuda su una canzone classica (na-na-na)
Non te ne accorgi che hai distrutto tutto lentamente
Ho distrutto tutto lentamente
Tu, almeno tu
In quella notte d\'estate
Tornassi un attimo
E c\'è qualcosa che ti agita
Smetti di piangere, mi guardi che sei fradicia
E mi strattoni mentre mi tiri la manica
Cerco il tuo sguardo, ma ti giri dall\'altra parte
Ma non so più come dirtelo
Vederci, appuntamenti nascosti in ristoranti costosi
Ma non cambia niente
Lentamente si sta spegnendo
Ogni fottuto sentimento
(Ogni fottuto sentimento)
Non vedi che
Quando mi guardi davvero negli occhi
Non sai se scappare, restare, se hai voglia
Ma dimmi che sono lontano anni luce, lontano da te
E te lo si legge dagli occhi che mi odi
E se in amore non soffri, non sogni, non corri
Non so innamorarmi di te
Lentamente, si sta spegnendo
Ogni fottuto sentimento
Ogni fottuto sentimento',
                'created_at' => '2026-03-06 02:01:07',
                'updated_at' => '2026-03-06 13:59:23',
            ),
            40 => 
            array (
                'id' => 41,
                'edition_id' => 4,
                'title' => 'Cuoricini',
                'collaborators' => 'F. Mesiano, F. Lama, A. Filippelli e G. Manilardi',
                'position' => 10,
                'lyrics' => 'Oggi mi sento una pozzanghera se l\'ansia mi afferra
Con lo sguardo verso il cielo, ma il morale per terra
Se mi trascuri, impazzisco come maionese
Ci sto male (male, male, male)
Vorrei svagarmi, ma oggi una canzone dura come un temporale
(Anche se è molto popolare)
E mi hai buttato via in un sabato qualunque
Mentre andavi in cerca di uno slancio di modernità
Ma tu volevi solo cuoricini, cuoricini
Pensavi solo ai cuoricini, cuoricini
Stramaledetti cuoricini, cuoricini
Che mi tolgono il gusto di sbagliare tutto
Poi mi uccidi, poi mi uccidi
Quegli occhi sono due fucili, due fucili
Che sparano sui cuoricini, cuoricini
Persino sotto alla notizia "crolla il mondo"
Un divano e due telefoni, è la tomba dell\'amore
Ce l\'ha detto anche un dottore
Porta un chilo di gelato e poi nel dubbio porta un fiore
E almeno un kiss, please
E se oggi ho le pupille più grandi del cuore, non mi giudicare
Male, male, male
Che dovrei dire io che ti parlavo
E tu nemmeno ti mettevi ad ascoltare
Tu mettevi solo cuoricini, cuoricini
Pensavi solo ai cuoricini, cuoricini
Stramaledetti cuoricini, cuoricini
Che mi tolgono il gusto di sbagliare tutto
Poi mi uccidi, poi mi uccidi
Quegli occhi sono due fucili, due fucili
Che sparano sui cuoricini, cuoricini
Persino sotto alla notizia "crolla il mondo"
Ma fortunatamente un sabato qualunque
Mi hai portato via da tutta quanta la modernità
Ma dove scappi senza cuoricini, cuoricini
Per l\'autostima cuoricini, cuoricini
Che medicina cuoricini, cuoricini
Ma che tolgono il gusto di sbagliare tutto
Poi mi uccidi, poi mi uccidi
Quegli occhi sono due fucili, due fucili
Che sparano sui cuoricini, cuoricini
Persino sotto alla notizia "crolla il mondo"
Cuoricini, cuoricini
Cuoricini, cuoricini
Persino sotto alla notizia "crolla il mondo"',
                'created_at' => '2026-03-06 02:01:37',
                'updated_at' => '2026-03-06 13:59:34',
            ),
            41 => 
            array (
                'id' => 42,
                'edition_id' => 4,
                'title' => 'La tana del granchio',
                'collaborators' => 'Bresh, L. Di Blasi, G. De Lauri e L. Ghiazzi',
                'position' => 11,
                'lyrics' => 'Nella tana del granchio c\'è una canzone
Ho posato i miei vestiti al sole
Ti ho vista piangere dietro alle mie parole
Ma non sapevo cos\'altro dire di te
Ora che siamo soli mi puoi pure parlare
Guardati intorno, non c\'è nessuno
Non far così, non mi giudicare
Ho una parola sbagliata per ogni frase
Sono soltanto un uomo e non ci so fare
E anche se tu non lo vuoi sapere
Sappi però che alla ﬁne ti voglio bene
Sono una madre che si sgola
Una testa che gira ancora
Una chitarra che non suona
Una borsa piena di buchi
Se capisci che non ti amo
Sei una sirena che non nuota
Cosa puoi dire?
Fammi solo sapere quando vuoi guarire
Dall\'espressione hai qualcosa da dire per me
Ma lo sento, non mi dai due lire
Un sacchetto di plastica
Tiene i nostri due costumi bagnati
Ce li siamo dimenticati
Nella macchina che è rimasta sotto al sole per tutta l\'estate
Ad ottobre li ho ritrovati
Lascio la via per te
Ora che non è più un sì
Camera mia non è una metropoli
Che incubo stare ad aspettare in un monolocale
Sei fuori a carnevale
Sono una madre che si sgola
Una testa che gira ancora
Una chitarra che non suona
Una borsa piena di buchi
Se capisci che non ti amo
Sei una sirena che non nuota
Cosa puoi dire?
Fammi solo sapere quando vuoi guarire
Dall\'espressione hai qualcosa da dire per me
Ma lo sento, non mi dai due lire
Se il mare si è salato è perché un marinaio ci ha pianto sopra
Se han fatto il calendario è perché ti vorrei fare santa ora
Senti che forte il vento
Vento che non si posa
Cosa puoi dire?
Fammi solo sapere quando vuoi guarire
Dall\'espressione hai qualcosa da dire per me
Ma lo sento non mi dai due lire
Ho bisogno solo di riuscire a convincere te
Non solo te
Ho bisogno solo di riuscire a convincere te
Ma lo sento, non mi dai due lire',
                'created_at' => '2026-03-06 02:02:15',
                'updated_at' => '2026-03-06 13:59:43',
            ),
            42 => 
            array (
                'id' => 43,
                'edition_id' => 4,
                'title' => 'Dimenticarsi alle 7',
                'collaborators' => 'Elodie, D. Petrella e D. Simonetta',
                'position' => 12,
                'lyrics' => 'Quanta gente passa e se ne va
Che non sa chi sei
Contarla credo sarebbe inutile
In un mondo che è freddo oramai
Stasera
Ci sei solo tu nella città
Degli occhi miei
Se è vero che poi fanno la ruggine
Io non voglio più piangere così
Prima ancora, prima
Che ti incontrassi (amore)
Poi rivedersi ancora
Come due pazzi (che cosa mi fai)
Travolti da un\'idea
Che non vuoi che passi
Che piano piano scivola giù
Dicevi
Stasera
Dove vai amore?
Ora che ho bisogno di te
Ancora, ancora di più
Solo per fatalità
Insieme
Dove vai amore?
Non mi fai
Morire
Ancora, ancora di più
Dimenticarsi alle 7
Dimenticarsi alle 7
Dimenticare
Quando prendi a calci la poesia
Ma che bella sei
Nella tua solitudine
Sembra tutto più facile così
Prima ancora, prima
Che ti incontrassi (amore)
Ancora, ancora, ancora
Come due pazzi (che cosa mi fai)
Travolti da un\'idea
Che non vuoi che passi
Che piano piano scivola giù
Dicevi
Stasera
Dove vai amore?
Ora che ho bisogno di te
Ancora e ancora di più
Solo per fatalità
Insieme
Dove vai amore?
Non mi fai
Morire
Ancora, ancora di più
Dimenticarsi alle 7
Così di un giorno qualunque
Mentre si parla di niente
Lì seduti in un bar
Può capitare a chiunque
Mai a noi, no
Ma che strano eﬀetto che fa
Mandare giù
La verità
Dicevi
Stasera
Dove vai amore?
Dove vai
Rimani
Ancora, ancora di più
Dimenticarsi alle 7
Dimenticarsi alle 7
Dimenticarsi alle 7
Dimenticarsi alle 7
Dimenticare',
                'created_at' => '2026-03-06 02:02:59',
                'updated_at' => '2026-03-06 13:59:54',
            ),
            43 => 
            array (
                'id' => 44,
                'edition_id' => 4,
                'title' => 'Se t\'innamori muori',
                'collaborators' => 'Mahmood, R. Fabbriconi e Michelangelo',
                'position' => 13,
                'lyrics' => '… Scusa, è tardi
Se vuoi passo da te
Siamo stanchi
Di lasciare sempre perdere
Non rispondi se ti chiedo d\'accendere
Avere figli non è, non è
Un discorso facile da prendere
… Perché, in fondo, sai
Che se sto qua
Ti stringerei fino ad odiarti, ma lo so
Che non è facile lasciarsi perdere
Serenamente
Perché è impossibile scordare quelle notti
Con il sorriso e con le borse sotto gli occhi
La sensazione che se ti innamori muori
Serenamente
… Credo sia normale
Farsi continuamente dei pensieri strani
Se inizia a svanire
La magia che c\'era, siamo già alla fine
Perché non è più la prima volta
Che prendi un treno per vedermi
Che abbiamo l\'ansia se si allungano i silenzi
… Perché, in fondo, sai
Che se sto qua
Ti stringerei fino ad odiarti, ma lo so
Che non è facile lasciarsi perdere
Serenamente
Perché è impossibile scordare quelle notti
Con il sorriso e con le borse sotto gli occhi
La sensazione che se ti innamori muori
Serenamente
… Lasciami soltanto un\'altra via d\'uscita
Da questa discussione che sembrava infinita
Qualcuno dovrà perdere perché
Accettarsi è difficile, quando non sai qual è la strada da prendere
Dire, "Siam diversi", è sempre dura da ammettere
Lasciami perdere, se conosci il peggio di me
… Perché, in fondo, sai
Che se sto qua
Ti stringerei fino ad odiarti, ma lo so
Che non è facile lasciarsi perdere
Serenamente
Perché è impossibile scordare quelle notti
Con il sorriso e con le borse sotto gli occhi
La sensazione che se ti innamori muori
Serenamente',
                'created_at' => '2026-03-06 02:03:25',
                'updated_at' => '2026-03-06 14:00:02',
            ),
            44 => 
            array (
                'id' => 45,
                'edition_id' => 4,
                'title' => 'Tu con chi fai l\'amore',
                'collaborators' => 'A. Fiordispino, D. Petrella, E. D\'Erme e S. Tognini',
                'position' => 14,
                'lyrics' => 'Persa in un\'isola grande così
A mille miglia da questa città
Aveva grandi occhi neri e mi fa
"Dove stai andando?"
Non lo so
Era una stella che lascia una scia
Un desiderio che nasce così
La gente in strada che viene e che va
Si sta cercando
E non lo sa
Tutte le storie sono uguali
Te lo dico
C\'è sempre uno che se ne va
Da Roma a Portorico
Mi sento come l\'ultima bottiglia che ho nel frigo
Che non ricordo mai mai mai mai
Mi piaci un minimo
Mi aspetti a Mykonos
In ogni rendez-vous
Bugie si dicono
Chi non è libero
Chi non c\'ha il fisico
Stasera non m\'importa più
Tu con chi fai l\'amore
E perché
Sale come un ascensore quando vengo da te
Se fai così mi togli l\'anima
Che cosa stupida
Tanto la cosa importante non è
Tu con chi fai l\'amore
Stasera
Domani
Chissà
Tu con chi fai l\'amore
Stasera
Domani
Chissà
A mezzanotte poi un salto nel blu
Dove le luci si spengono già
Diceva "Dai l\'hai capito anche tu
Mi sto innamorando"
Non lo so
Io per gli errori c\'ho una mezza calamita
Chi prova le emozioni e chi le compra con la Visa
Non mi mandare fuori appena inizia la partita
Con te non gioco mai mai mai mai
Mi piaci un minimo
Mi aspetti a Mykonos
In ogni rendez-vous
Bugie si dicono
Chi non è libero
Chi non c\'ha il fisico
Stasera non m\'importa più
Tu con chi fai l\'amore
E perché
Sale come un ascensore quando vengo da te
Se fai così mi togli l\'anima
Che cosa stupida
Tanto la cosa importante non è
Tu con chi fai l\'amore
Non posso spegnere le luci dell\'alba
Che sono dentro la stanza
Guarda che confusione
Non c\'è mai una ragione
Uhh
Non posso credere alle voci dell\'ansia
Sanno il mio nome ma non è la realtà
Guarda che confusione
Ma non m\'importa più
(Tu con chi fai)
(Tu con chi fai)
Tu con chi fai l\'amore
E perché
Sale come un ascensore quando vengo da te
Se fai così mi togli l\'anima
Che cosa stupida
Tanto la cosa importante non è
Tu con chi fai l\'amore
Stasera
Domani
Chissà
Tu con chi fai l\'amore
Stasera
Domani
Chissà',
                'created_at' => '2026-03-06 02:03:57',
                'updated_at' => '2026-03-06 14:00:10',
            ),
            45 => 
            array (
                'id' => 46,
                'edition_id' => 4,
                'title' => 'Mille vote ancora',
                'collaborators' => 'R. Pagliarulo, Kende, M. Salvaderi, L. Santarelli, D. Simonetta, P. Antonacci e S. Tognini',
                'position' => 15,
                'lyrics' => 'Mi ricordo una strada, un quartiere qualunque
Un bambino che sogna pure se non ha niente
Ogni giorno è un regalo per chi come me è destinato a partire
E le voci di chi ha giudicato ritornano nella mia testa
Mi dicevano, "Tu non sarai mai nessuno"
Io ora non mi ricordo più com\'è l\'odore del caffè
Quelle canzoni che mamma ascoltava alla radio
Giocavamo in quartiere, sembrava uno stadio
Non è stata domenica mai più
Da quando sono andato via da casa mia
Rimpiango anche le cose che odiavo
Le stesse che mi hanno fatto andare via
L\'erba cresce in un campetto abbandonato
Colpa dei telefoni, non ci hanno più giocato
L\'ansia nel cuore quando le citofonavo
Se rispondeva il padre poi scappavo
Lo stato è assente come noi in mezzo a quei banchi
Un foglio bianco dove scriverò "mi manchi"
Tutto quello che ti serve nel quartiere
Studia oppure \'mparate \'o mestiere
E mo\' riportami dove overamente songo je
\'O cafè dinto \'e canzoni
Viento \'e mare che sbatte pe dinto \'e feneste
Me sceta \'e po\' se ne va
Me vonno fottere l\'anema
Ma je \'ccu poco sto buono
Doje prete pe fa\'\'na porta
Turnasse criaturo pe\' correre
Mille vote ancora e ridere
Mille vote ancora e chiagnere
Mille vote ancora \'a casa mia
Mille vote ancora
Faccio brutti sogni e po\' me sceto \'e botto
Vedo le facce degli amici ca nun ce stanno cchiù
Aggio sbagliato a prendermi le colpe
A pensare, potevo fare di più
Ad immaginare \'nu finale diverso
A pensà si chella palla nun pigliava \'a traversa
A distinguere l\'amore dal sesso
Se\'o posto \'e vencere avesse perso, fosse rimasto me stesso
Il nemico a volte è l\'orgoglio
Che chiude rapporti anche se non c\'è un motivo
Siamo carte stropicciate nel portafoglio
Siamo anime buone in mondo cattivo
Perciò dicimme, "Tutt\' appost"
Anche quando il mondo cade sulle spalle nostre
Anche quando alle domande non c\'è una risposta
A campà accussì è tosta, era meglio a casa nostra
E mo\' riportami dove overamente songo je
\'O cafè dinto \'e canzoni
Viento \'e mare che sbatte pe dinto \'e feneste
Me sceta \'e po\' se ne va
Me vonno fottere l\'anema
Ma je \'ccu poco sto buono
Doje prete pe fa\'\'na porta
Turnasse criaturo pe\' correre
Mille vote ancora e ridere
Mille vote ancora e chiagnere
Mille vote ancora \'a casa mia
Mille vote ancora
Se mi vedi un po\' triste
È perché cocche vota me manca assaje mamma mia \'a casa mia
Dove ancora si muore per niente a vent\'anni
\'Sti figlie anna capì, \'sta guerra adda ferni
E mo\' riportami dove overamente songo je
\'O cafè dinto \'e canzoni
Viento \'e mare che sbatte pe dinto \'e feneste
Me sceta \'e po\' se ne va
Me vonno fottere l\'anema
Ma je \'ccu poco sto buono
Doje prete pe fa\'\'na porta
Turnasse criaturo pe\' correre
Mille vote ancora e ridere
Mille vote ancora e chiagnere
Mille vote ancora \'a casa mia
Mille vote ancora',
                'created_at' => '2026-03-06 02:04:30',
                'updated_at' => '2026-03-06 14:00:21',
            ),
            46 => 
            array (
                'id' => 47,
                'edition_id' => 4,
                'title' => 'Grazie ma no grazie',
                'collaborators' => 'W. Peyote, A. A. Vella, D. Bestonzo e L. Romeo',
                'position' => 16,
                'lyrics' => 'Ma che storia triste, avevo aspettative basse
E sai già come finisce visto da dove si parte
Tu vorresti che la gente ti capisse, la ami come se lei ricambiasse
E c’hai provato anche più volte dei Jalisse ma l’insistenza non è mai così di classe
Certi discorsi vanno presi con le pinze oppure provocano risate grasse
E te la aspetti ma ogni volta ti stupisce, guarda le loro facce come se non bastasse
Grazie ma no grazie
Tanto fanno finta ma lo sanno
Più è profondo e meno paga, quasi sempre meglio stare in superficie: Salvagente
Le risposte che ti danno sembran fatte con lo stampo
Quindi metterò le mani avanti, due passi indietro ogni passo avanti
Dovresti andare a lavorare e non farti manganellare nelle piazze
Grazie ma no grazie
Questa gente non fa un cazzo li mantengo tutti io con le mie tasse
Grazie ma no grazie
Dovresti dare meno ascolto ai sentimenti che non sono mai dei buoni investimenti
Dovremmo organizzare una rimpatriata tipo una cena di classe
Grazie ma no grazie
Grazie ma no o o o
Davvero grazie ma
C’è chi non sa più come scrivere, non sa come parlare
Non sa a quali parole deve mettere ad esempio l’asterisco al plurale
C’è chi non sa più come ridere, non sa come scherzare
E vuole la tradizione se la confusione qua è generale
“Eh oggi va così chissà domani”
Domani domani do-do-domani magari riesco a capire gli esseri umani
Chi bacia sulla bocca i propri figli e c’è chi bacia sulla bocca i propri cani
E quanto va di moda il vittimismo di chi attacca ma dice che si difende
C’è chi dice non si può più dire niente, poi invece parla sempre, almeno sii coerente
Almeno per stavolta che c’è chi ancora ti da corda
E c’è chi ha perso la memoria e vorrebbe che tornasse come se non bastasse
Grazie ma no grazie
Dovresti andare a lavorare e non farti manganellare nelle piazze
Grazie ma no grazie
Questa gente non fa un cazzo li mantengo tutti io con le mie tasse
Grazie ma no grazie
Dovresti dare meno ascolto ai sentimenti che non sono mai dei buoni investimenti
Dovremmo organizzare una rimpatriata tipo una cena di classe
Grazie ma no grazie
Grazie ma no o o o
Davvero, grazie ma no
Storia triste, aspettative basse
C’è chi sparisce finché si calmano le acque (ma che storia triste)
C’è chi annuisce tra le frasi fatte vince chi stupisce sempre a mani basse
Grazie ma no grazie
Grazie ma no o o o
Davvero, grazie ma no grazie',
                'created_at' => '2026-03-06 02:05:10',
                'updated_at' => '2026-03-06 14:00:32',
            ),
            47 => 
            array (
                'id' => 48,
                'edition_id' => 4,
                'title' => 'Amarcord',
                'collaborators' => 'S. Toscano, J. Ettorre, F. Abbate, F. Mercuri, G. Cremona, E. Maimone e L. Grillotti',
                'position' => 17,
                'lyrics' => 'La sera ride, ma suona drammatica
Sembra la zona più buia di un luna park
Con te era più romantica la ruota panoramica
Mi piaceva anche avere paura
C\'è un vento che mi porterà
Mi scioglierà le trecce
Di una vie en rose come Édith Piaf
Non mi rimane niente
C\'ero io, c\'eri tu
Una lacrima mi scende
Anche se ti scorderò in un club il sabato
È tutto così amarcord, comico e tragico
Cosa eri tu? Non lo so
Ma un po\' mi avevi illusa
Sai, però forse in un film
Io con te non mi c\'immagino
E sembra così démodé, però era magico
Cosa sei tu, un déjà vu
Mi sono solo illusa
Amarcord
Una lama mi accarezza la consapevolezza
Che indietro non ci ritornerò
E mi faccio tenerezza
Un velo di tristezza è l\'unico vestito che ho
C\'è un vento che mi porterà
Mi scioglierà le trecce
Di una vie en rose come Édith Piaf
Non mi rimane niente
C\'ero io, c\'eri tu
Una lacrima mi scende
Anche se ti scorderò in un club il sabato
È tutto così amarcord, comico e tragico
Cosa eri tu? Non lo so
Ma un po\' mi avevi illusa
Sai, però forse in un film
Io con te non mi c\'immagino
E sembra così démodé, però era magico
Cosa sei tu, un déjà vu
Mi sono solo illusa
Amarcord
E ancora quel ricordo stupendo
Non è volato via con il vento
Ma dopo tutto mi arrendo
Una lacrima mi scende giù
Anche se ti scorderò (scorderò, scorderò)
È tutto così amarcord (amarcord, amarcord)
Cosa eri tu? Non lo so
Ma un po\' mi avevi illusa
Illusa, illusa
Anche se ti scorderò in un club il sabato
È tutto così amarcord, comico e tragico
Cosa eri tu? Non lo so
Ma un po\' mi avevi illusa
Sai, però forse in un film
Io con te non mi c\'immagino
E sembra così démodé, però era magico
Cosa sei tu, un déjà vu
Mi sono solo illusa
Amarcord',
                'created_at' => '2026-03-06 02:05:45',
                'updated_at' => '2026-03-06 14:00:41',
            ),
            48 => 
            array (
                'id' => 49,
                'edition_id' => 4,
                'title' => 'La mia parola',
                'collaborators' => 'Guè, Joshua, Tormento, E. Medici, Shablo, V. L. Faraone, R. Lamanna ed E. Conocchia',
                'position' => 18,
                'lyrics' => 'È una street song
Per dare quello che ho
Brucerò fino alla fine
Chiuso tra cemento e smog
È una street song
Qui la gente muore e vive
Senza soldi e alternative
L\'unica cosa che so
24h, sette su sette, no stop
Siamo in sbatti, sbatti per arrivare al top
Tu fai chatty chatty, io faccio parlare il mio flow
Non ti danno abbracci, qua sei da solo nel block
Io le mando baci, lei che per me è la più hot
Mi dicevi: "Taci", ora però sono il goat
Quaggiù odi e ami, a giudicarmi è Dio
Amo la mia mami, amo \'sti money e l\'hip-hop
È una street song
Per dare quello che ho
Brucerò fino alla fine
Chiuso tra cemento e smog
È una street song
Qui la gente muore e vive
Senza soldi e alternative
L\'unica cosa che so
Seh, suona dal basso questo gospel
È la voce di chi raccoglie le forze
Nonostante tutto mette da parte i forse
Qui vince la legge del più forte
È rap, è blues, è gin e juice
Fai il mio nome tre volte, Beetlejuice
Suona ancora più forte, Bad and Boujee
Rock\'n\'roll, lo sai, party e bullshit
La voce del blocco suonerà più forte
Per quelle volte che ci hanno chiuso le porte
E ho solo una word, se dico che hai la mia parola
Lo sanno i miei G, questa è la way that we live
È una street song
Per dare quello che ho
Brucerò fino alla fine
Chiuso tra cemento e smog
È una street song
Qui la gente muore e vive
Senza soldi e alternative
L\'unica cosa che so
È una street song
Per dare quello che ho
Brucerò fino alla fine
Chiuso tra cemento e smog
È una street song
Qui la gente muore e vive
Senza soldi e alternative
L\'unica cosa che so (che so)',
                    'created_at' => '2026-03-06 02:06:18',
                    'updated_at' => '2026-03-06 14:00:51',
                ),
                49 => 
                array (
                    'id' => 50,
                    'edition_id' => 4,
                    'title' => 'Fuorilegge',
                    'collaborators' => 'R. Luini, A. Ferrara, F. Abbate e Cripo',
                    'position' => 19,
                    'lyrics' => 'Cosa fai
Mentre tutti dormono?
Chissà se mi pensi o no
Mentre la luna cala su di noi
Splende in alto, guarda
Mai una volta giudica
Nostalgia puttana
Sono sola come lei
Che cosa fai
Mentre tutti sognano?
Ma forse ho oltrepassato il limite di ore senza te
Sento il tuo nome e inizia a piovere fuori e dentro me
Mi rigiro nel letto, non dormo più
Vorrei saperti dire di no
C\'è quel film che ti piaceva alla TV
Sembra che stia parlando di noi
Se pensarti fosse un crimine stanotte io sarei
Fuorilegge
Fuorilegge
Partiamo domani
Bonnie e Clyde
Coi sogni rubati
Senza di me cosa fai?
Mentre tutti si amano
Io rido del nostro destino avverso
Ascolto Almeno Tu nell\'Universo
Mi inginocchio e chiedo agli angeli di darmi ciò che ho perso
Ma forse ho oltrepassato il limite di ore senza te
Sento il tuo nome e inizia a piovere fuori e dentro me
Mi rigiro nel letto, non dormo più
Vorrei saperti dire di no
C\'è quel film che ti piaceva alla TV
Sembra che stia parlando di noi
E se pensarti fosse un crimine stanotte io sarei
Fuorilegge
Fuorilegge
Partiamo domani
Bonnie e Clyde
Coi sogni rubati
Senza di me cosa fai?
Forse non sai che per te ho pianto
Stelle sopra al soffitto però io mi accontento
Canzoni tristi dal primo piano
Cuori a 200 all\'ora ma vuoi ballare un lento
Forse ho oltrepassato il limite di ore senza te
Sento il tuo nome e inizia a piovere fuori e dentro me
Mi rigiro nel letto, non dormo più
Vorrei saperti dire di no
C\'è quel film che ti piaceva alla TV
Sembra che stia parlando di noi
E se pensarti fosse un crimine stanotte io sarei
Fuorilegge
Fuorilegge
Partiamo domani
Bonnie e Clyde
Coi sogni rubati
Fuorilegge',
                    'created_at' => '2026-03-06 02:06:47',
                    'updated_at' => '2026-03-06 14:01:00',
                ),
                50 => 
                array (
                    'id' => 51,
                    'edition_id' => 4,
                    'title' => 'Eco',
                    'collaborators' => 'A. J. Thiele, E. Triglia, F. Abbate e S. Benussi',
                    'position' => 20,
                    'lyrics' => 'E ti giuro non ho più bisogno di fingere
Questa mia vita è il mio viaggio ed io
Traccio da sola le scelte che faccio
Ma se ci sei tu
Ho più coraggio
E ricordo quando eri bambino
E restavamo ore abbracciati nel letto
Per sentirci grandi e la musica poi ci baciava
Per farci sentire un po\' meno soli
Forse sarà l\'insicurezza
Sarà che per noi la famiglia non è mai la stessa
Sarà che siamo figli dell\'indifferenza
Cresciuti da una donna più pura della bellezza
E se potessi dirti che
Qui la paura non ha età
Tu fissala forte dentro gli occhi
Spara al centro qui la notte non ci fotte
E ti giuro se il tempo è una linea che cambia
Sarò la tua eco e poi mai la distanza che corre tra il mondo e le cose
Ma se ci sei tu
Sì, resto calma
Forse sarà l\'insicurezza
Sarà che per noi la famiglia non è mai la stessa
Sarà che siamo figli dell\'indifferenza
Cresciuti da una donna più pura della bellezza
E se potessi dirti che
Qui la paura non ha età
Tu fissala forte dentro gli occhi
Spara al centro qui la notte non ci fotte
E se capissi perché contano sempre più le idee
Rimangono negli occhi della gente
Han più potere della rabbia
Tu difendile
E quando ti senti più fragile
Cambia la pelle
Equilibrio instabile
Fidati è meglio sbagliare che restare immobile
E se potessi dirti che
Qui la paura non ha età
E se capissi perché contano sempre più le idee
Rimangono negli occhi della gente
Han più potere della rabbia
Tu difendile',
                    'created_at' => '2026-03-06 02:07:23',
                    'updated_at' => '2026-03-06 14:01:09',
                ),
                51 => 
                array (
                    'id' => 52,
                    'edition_id' => 4,
                    'title' => 'Fango in paradiso',
                    'collaborators' => 'F. Michielin, D. Simonetta e A. Raina',
                    'position' => 21,
                    'lyrics' => 'Dopo centomila lacrime
Le grondaie cadono
Non so se vorrei rifarlo da capo
Quasi speravo tu mi avessi tradito
Ti avrei scritto tutto in un messaggio
Ma non sapevo se ero in grado
Mi hai fatta piangere fuori dallo stadio
Ma avrei voluto fosse tutt\'altro
E va bene, e va bene, e va bene così
Non mi aspetto niente di sensato
Come quei cartelli gialli per terra, con su scritto
"Attenzione, il pavimento è bagnato"
Come se cambiasse ancora qualcosa così
Ci vorrebbe un\'altra vita in un film
E quanto amore sprecherò
Quanti vetri rotti
Che sono plastica
Per i tuoi stupidi occhi
Se non piangi mai
Programmare un addio chiusi in macchina
Era tutta teoria, ma non pratica
Mi dispiace però a volte capita
Di volersi sempre o mai più
Non c\'è più il soffitto
Chissà con chi farai un figlio
Se poi cambierai indirizzo
Se c\'è fango in paradiso
Quante volte mi avrai fatto il cinema
Dentro a quel supermercato
Non so se l\'avevi considerato
Che uno dei due sarebbe stato da schifo
Ma va bene, va bene, più o meno così
Non mi aspetto niente di sensato
Da chi l\'edera la compra già finta
E poi in estate la tiene su un balcone in un vaso
Come se cambiasse ancora qualcosa così
Ci vorrebbe un\'altra vita
E quanto amore sprecherò
Quanti vetri rotti
Che sono plastica
Per i tuoi stupidi occhi
Se non piangi mai
Programmare un addio chiusi in macchina
Era tutta teoria, ma non pratica
Mi dispiace però a volte capita
Di volersi sempre o mai più
Non c\'è più il soffitto
Chissà con chi farai un figlio
Se poi cambierai indirizzo
Se c\'è fango in paradiso
Ma non lo so
Programmare un addio chiusi in macchina
Quasi zero poesia, solo pratica
Mi dispiace però a volte capita
Di amarsi sempre o mai più
Non c\'è più il soffitto
Chissà se ti vedrò in giro
Se avrai perso, se avrò vinto
Se c\'è fango in paradiso',
                    'created_at' => '2026-03-06 02:07:56',
                    'updated_at' => '2026-03-06 14:01:20',
                ),
                52 => 
                array (
                    'id' => 53,
                    'edition_id' => 4,
                    'title' => 'Non ti dimentico',
                    'collaborators' => 'F. Silvestre',
                    'position' => 22,
                    'lyrics' => 'Convivere con il senso di che sarebbe stato
Parlare di coraggio quando sai che non lo hai avuto
E camminare in strada con lo sguardo verso il basso
Cercando le risposte tra i tuoi passi sull\'asfalto
E chiedersi se credi davvero in qualche cosa
Se non lasciarti andare fa più male o più paura
L\'ho letto sull\'oroscopo che quelli del mio segno
Di complicarsi i piani quasi ne hanno un po\' bisogno
E non te l\'ho mai detto che mentre ti baciavo
Tenevo aperti gli occhi e di nascosto ti osservavo
Sembravi una canzone che mi squarciava il petto
Un quadro di Kandinsky dove immaginarmi tutto
Ma è l\'ora del ritorno
È l\'ora del coraggio
Forse è vero siamo fatti tutti e due per qualcun altro
Ma io non ti dimentico
Io no non ti dimentico
Difficile accettarlo
Ma non siamo più gli stessi
Difficile convivere tra tutti quei ricordi
Che sanno di passione
Che sanno di rimpianti
Che sanno di carezze date al buio mentre dormi
Chissà se ti ricordi la mia prima domanda
Dicesti non ti posso dare ora una risposta
Eppure lo sapevi ma non volevi dirlo
Soltanto per paura
Soltanto per orgoglio
E non te l\'ho mai detto che mentre ti baciavo
Tenevo aperti gli occhi e di nascosto ti osservavo
Sembravi una canzone che mi squarciava il petto
Un quadro di Kandinsky dove immaginarmi tutto
Ma è l\'ora del ritorno
È l\'ora del coraggio
Forse è vero siamo fatti tutti e due per qualcun altro
Ma io no non ti dimentico
Io no non ti dimentico
E non te l\'ho mai detto che mentre ti baciavo
Tenevo aperti gli occhi e di nascosto ti osservavo
Sembravi una canzone che mi squarciava il petto
Un quadro di Kandinsky dove immaginarmi tutto
È l\'ora del ritorno
È l\'ora del coraggio
Forse è vero siamo fatti tutti e due per qualcun altro
Io no non ti dimentico
Ma io no non ti dimentico',
                    'created_at' => '2026-03-06 02:08:22',
                    'updated_at' => '2026-03-06 14:01:29',
                ),
                53 => 
                array (
                    'id' => 54,
                    'edition_id' => 4,
                    'title' => 'Tra le mani un cuore',
                    'collaborators' => 'T. Ferro, F. Neviani, G. Anania e M. Venturini',
                    'position' => 23,
                    'lyrics' => 'Se hai tra le mani un cuore
Un giorno crollerai
Sollevalo da terra
Comprendilo se torna stanco da una guerra
Se hai tra le mani un cuore
Tu tienilo in alto
E amalo in ginocchio su un altare
Che ogni tua ferita lo farà sanguinare
La vita intera con il cuore in mare
Il mondo l\'ha già fatto a pezzi eppure lì rimane
Proteggilo dal freddo che c\'è stato
E troverà la pace dopo quello che ha passato
Se hai tra le mani un cuore
È come sfidare Dio
Consegnalo al suo destino atroce
Un bacio come un padre, poi il segno della croce
La vita intera con il cuore in mare
Il mondo l\'ha già fatto a pezzi eppure lì rimane
Proteggilo dal freddo che c\'è stato
E troverà la pace dopo quello che ha passato
Tra le mani un cuore
Ma non lo puoi vedere
Non l\'ho mai visto io
Neanche quando lo sporcai col rosso di un addio
E salverò il tuo cuore in fondo al mare
La vita l\'ha spezzato e lui continua ad amare
Io ti proteggerò da quel che è stato
E troverai la pace dopo quello che hai passato
Io ti proteggerò da quel che è stato
E troverai la pace dopo quello che hai passato
Dopo quello che hai passato',
                    'created_at' => '2026-03-06 02:08:51',
                    'updated_at' => '2026-03-06 14:01:40',
                ),
                54 => 
                array (
                    'id' => 55,
                    'edition_id' => 4,
                    'title' => 'Anema e core',
                    'collaborators' => 'S. Brancale, F. Abbate, J. Ettorre, M. Finotti e N. Lazzarin',
                    'position' => 24,
                    'lyrics' => 'Ti penso tra le vie
E quando vedo le scie
Delle barche in questo mare
Carpe diem
Domani le tue bugie
Non le voglio più ascoltare
La mia anima canta
È una camicia bianca
Che mi sventola addosso, eh
Stanotte saremo due stelle del cinema
Italo-americano, dammi un bacio su un taxi cabrio
Un bacio che s\'adda veré, s\'adda da veré, s\'adda da veré
Baby, I love you, Nenné, ti amo
Non lo so se ti suonerà neo-melodico
Ma stanotte ti dedico
Anema e core, anema e core
Anema e core, anema e core
Ah-ah-ah, perché metti questa cassa dritta?
Io con te vorrei ballare salsa
Tipo soli soli sulla Rambla
Maria Callas canta (Lazzì)
Cosa vuoi davvero, soldi o libertà?
Che ti saluti dal balcone la città?
L\'eleganza viene dal basso, come il jazz
E stanotte saremo due stelle del cinema
Italo-americano, dammi un bacio su un taxi cabrio
Un bacio che s\'adda veré, s\'adda da veré, s\'adda da veré
Baby, I love you, Nenné, ti amo
Non lo so se ti suonerà neo-melodico
Ma stanotte ti dedico
Anema e core, anema e core
Anema e core, anema e core
Italo-americano, dammi un bacio su un taxi cabrio
Un bacio che s\'adda veré, s\'adda da veré, s\'adda da veré
pccè, io e tè
Sim na cosa sola
Sim du facce della stessa luna
Com sta collana che porta fortuna
Bra ù sà, marioul
Nan zi dann\' adenza a nsciun\'
Tu sta cummè p\' fa l\'amore
Io vogghj attè, anema e core
Italo-americano, dammi un bacio su un taxi cabrio
Un bacio che s\'adda veré, s\'adda da veré, s\'adda da veré
Baby, I love you, Nenné, ti amo
Non lo so se ti suonerà neo-melodico
Ma stanotte ti dedico
Anema e core, anema e core
Anema e core, anema e core
Italo-americano, dammi un bacio su un taxi cabrio
Un bacio che s\'adda veré, s\'adda da veré, s\'adda da veré
Lazzì',
                    'created_at' => '2026-03-06 02:09:30',
                    'updated_at' => '2026-03-06 14:01:51',
                ),
                55 => 
                array (
                    'id' => 56,
                    'edition_id' => 4,
                    'title' => 'Damme \'na mano',
                    'collaborators' => 'N. Rapisarda, D. Petrella, D. V. Vettraino e L. V. Faraone',
                    'position' => 25,
                    'lyrics' => 'Io non soffro per te
Non so fare l\'attore
Sono pronto a sbagliare
Come un uomo d\'onore
Spengo la sigaretta
Come la nostra storia
Ogni notte è per sempre
Per le strade di Roma
E non fare la stupida stasera
Tu non sei mai sincera
Tu sei pericolosa
Io so che morderai la mela
Ma di noi cosa direbbe Califano?
Che è durato troppo poco
Cammino sui sanpietrini
Fino a quando non te trovo
Damme \'na mano
Che c\'ho ner core
Solo \'na donna e \'na canzone
Nun conta niente
Si crolla er monno
Io m\'aricordo solo di te
Damme \'na mano
Sinnò me moro
Damme \'na mano
Che c\'ho ner core
Soltanto te
Io e te per tutta la vita
Te lo giuro, ma incrocio le dita
Sono il classico uomo italiano
Amo solo mia madre Annarita
La domenica ti lascio sola
Vuoi andare a cena, ma c\'è la partita
Tu mi aspetti nel letto nervosa
Parli poco, fai la stranita
Poi mi tocchi, te ne fotti
Vai più giù, mi si girano gli occhi
Poi mi guardi, togli i tacchi
Mentre ti fai i capelli raccolti
A te piace sbagliare, farmi del male
Mi alzi le mani, poi ti vuoi scusare
E so che perderò questo gioco
Come a carte, sei brava a barare
Damme \'na mano
Che c\'ho ner core
Solo una donna
E \'na canzone
Non conta niente
Si crolla er monno
Io m\'aricordo solo di te
Damme \'na mano
Sinnò me moro
Damme \'na mano
Che c\'ho ner core
Soltanto te
Io ho sofferto per te
Ora so fare l\'attore
Quante volte ho sbagliato
Come un uomo d\'onore
Accendo una sigaretta
Penso alla nostra storia
Mentre guardo la notte
Per le strade di Roma',
                    'created_at' => '2026-03-06 02:10:06',
                    'updated_at' => '2026-03-06 14:02:00',
                ),
                56 => 
                array (
                    'id' => 57,
                    'edition_id' => 4,
                    'title' => 'Chiamo io chiami tu',
                    'collaborators' => 'G. Gozzi, D. Petrella e S. Tognini',
                    'position' => 26,
                    'lyrics' => 'Per esempio a me piace la musica
Stare nuda e nessuno che giudica
Amo il cibo di strada
I capelli del mare
Anche farmi del male
Che stupida
Menomale che non prende l\'Iphone
Tra le onde alte di Rio
Un silenzio che mi spezza un po\'
Che mi brucia un po\'
Come fa uno shot
E quante parole che
Lasciano un vuoto
Ti lasciano solo
Qualcosa in cui credere
Niente di serio se uno dei due se ne va
Per una bugia di più
Nascosta sotto le labbra
Poesia di contrabbando
Ti ricordi quando
Era soltanto un gioco
Chiamo io chiami tu
Chi è il primo che cede stasera
Dimmi dove sei
Dove dove dove dove
Solo io solo tu
Tanto non ne vale la pena
Chissà dove sei
Dove dove dove dove
E ogni volta che stiamo così
Non serve a niente
Tanto è sempre lunedì
Lo stesso film
Non mi aspettare
Non ti scordare
Di me mai più
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiama
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiama
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiama
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiama
Chiama
Come i rami contorti dell\'edera
Ci aggrappiamo a una scusa ridicola
Stiamo qui ad aspettare
In un limbo infernale
L\'amore è una cosa più piccola
Cosa rimane se
Troppe persone si fottono il cuore
A pensare che poi non è
Niente di serio se uno dei due se ne va
Per una bugia di più
Nascosta sotto le labbra
Poesia di contrabbando
Ti ricordi quando
Era soltanto un gioco
Chiamo io chiami tu
Chi è il primo che cede stasera
Dimmi dove sei
Dove dove dove dove
Solo io solo tu
Tanto non ne vale la pena
Chissà dove sei
Dove dove dove dove
E ogni volta che stiamo così
Non serve a niente tanto è sempre lunedì
Lo stesso film
Non mi aspettare
Non ti scordare di me
Mai più
Che pensavo a te
Come una voce
Che è fragile
Come l\'idea
Di stare con te
Volevo stringerti a me
Come fosse per sempre ancora
Ogni volta che stiamo così
Non serve a niente tanto è sempre lunedì
Lo stesso film
Non mi aspettare
Non ti scordare di me
Mai più
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiama
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiama
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiama
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiamo io, chiami tu
Chiama
Chiama',
                    'created_at' => '2026-03-06 02:10:44',
                    'updated_at' => '2026-03-06 14:02:11',
                ),
                57 => 
                array (
                    'id' => 58,
                    'edition_id' => 4,
                    'title' => 'Febbre',
                    'collaborators' => 'C. Soccini, J. Ettorre, F. Calearo, F. Abbate e D. Faini',
                    'position' => 27,
                    'lyrics' => 'Ti sei preso una parte di me
Quella ancora più in fondo dell\'anima
Un sentimento
Che se si rompe taglia come il vetro
E anche deludere è un\'abitudine
Come nel mio primo giorno di scuola
Non so che faccio qui
Il buio è tagliato dalle luci viola
Il cielo fa come un glitch
Tu mi guardi dall\'alto
Trascinandomi in basso
Non ascolti quando grido
Sembri fatto di ghiaccio
Io sono fatta così
Alle feste chic sola sul terrazzo
Tutti fanno bling-bling
Io nemmeno mi piaccio
Non dire, "Je t\'aime"
Dimmelo se
Ciò che provi è solo febbre
Che sale e scende
Che mi fa male, male
I tuoi occhi Blu Klein
Dicono che
Stanotte è solo febbre
Che sale e scende
Tu prendi me
Come un enfant per strada
In abito da gala
Non ci amerà la fama
Non cambierà la trama
Mille lune passeranno
E una ci sarà per sempre
Per te che non vuoi scendere
Come la febbre
Ti sei preso una parte di me
Quella ancora più in fondo dell\'anima
Un sentimento
Che se si rompe taglia come il vetro
Corro, corro come dentro un bosco
Dentro questo inferno è più difficile
Questo amore dimmi quanto costa
Ti senti un\'ombra qua vicino a me
Non ascolti quando grido
E nemmeno se taccio
Non ascolti quando grido
Non dire, "Je t\'aime"
Dimmelo se
Ciò che provi è solo febbre
Che sale e scende
Che mi fa male, male
I tuoi occhi Blu Klein
Dicono che
Stanotte è solo febbre
Che sale scende
Tu prendi me
Come un enfant per strada
In abito da gala
Non ci amerà la fama
Non cambierà la trama
Mille lune passeranno
E una ci sarà per sempre
Per te che non vuoi scendere
Come la febbre
Mille lune passeranno
E una ci sarà per sempre
Per te che non vuoi scendere
Non dire, "Je t\'aime"
Dimmelo se
Ciò che provi è solo febbre
Che sale e scende
Che mi fa male, male
I tuoi occhi Blu Klein
Dicono che
Stanotte è solo febbre
Che poi ti prende
Come la febbre
Come un enfant per strada
In abito da gala
Non ci amerà la fama
Non cambierà la trama
Mille lune passeranno
E una ci sarà per sempre
Per te che non vuoi scendere
Come la febbre',
                    'created_at' => '2026-03-06 02:11:16',
                    'updated_at' => '2026-03-06 14:02:19',
                ),
                58 => 
                array (
                    'id' => 59,
                    'edition_id' => 4,
                    'title' => 'Il ritmo delle cose',
                    'collaborators' => 'M. Martorana, J. Ettorre, M. Pierotti, F. Catitti, Shablo e L. V. Faraone',
                    'position' => 28,
                    'lyrics' => 'Dove sono i soldi adesso
Che sei rimasta sola
Pornografia ma senza sesso
Effetto senza droga
Dov\'è il tuo dio pensavo poveri poveri noi
Non sono problemi tuoi il caos non sciopera mai
Ovunque prende forma
Ultimamente fumo ed esco veramente poco
Sto in mutande mentre fisso stupidamente il vuoto
Ancora e poi di nuovo
Finché l\'alba va via dalla via non mi è più chiaro se sia musica o burocrazia
Questo caos che forma
Il ritmo delle cose
Il ritmo che ci muove
Ci corre nella gola
E ci spezza le parole
È il ritmo delle cose
E ti stancherai come fai coi vestiti
Mi romperai come i tuoi giochi preferiti
Quante cose distruggiamo costruendo
È un violento decrescendo
È un moderno decrescendo
È un inferno a fuoco lento
Amore senza sentimento
È un violento decrescendo
E ti stancherai come fai coi vestiti
Mi romperai come i tuoi giochi preferiti
Quante cose distruggiamo costruendo
È un violento decrescendo
Si può fermare la pioggia
Ma è inutile scomodare i cieli
Se in quelle macchie di roorscach
Ci vedi cose le più crudeli
Buttati nel mondo siamo alla prova
Come si lancia per caso un bouquet da sposa
Esco da un\'altra festa esco dall\'algoritmo
Ritrovo la bellezza solo dietro l\'imprevisto
È caos che corre
Che lento muore
Il ritmo delle cose
Il ritmo che ci muove
Ci corre nella gola
E ci spezza le parole
È il ritmo delle cose
E ti stancherai come fai coi vestiti
Mi romperai come i tuoi giochi preferiti
Quante cose distruggiamo costruendo
È un violento decrescendo
È un moderno decrescendo
È un inferno a fuoco lento
Amore senza sentimento
È un violento decrescendo
E ti stancherai come fai coi vestiti
Mi romperai come i tuoi giochi preferiti
Quante cose distruggiamo costruendo
È un violento decrescendo
Forse solo la stanchezza
Ti porta dentro quella stanza
Che hanno chiamato libertà
Di dire no di dire basta
Questo casino mi somiglia
È il lato oscuro in piena vista
O è forse merda di un\'artista
Il ritmo delle cose
Il ritmo che ci muove
Ci corre nella gola
E ci spezza le parole
È il ritmo delle cose
E ti stancherai come fai coi vestiti
Mi romperai come i tuoi giochi preferiti
Quante cose distruggiamo costruendo
È un violento decrescendo
È un moderno decrescendo
È un inferno a fuoco lento
Amore senza sentimento
È un violento decrescendo
E ti stancherai come fai coi vestiti
Mi romperai come i tuoi giochi preferiti
Quante cose distruggiamo costruendo
È un violento decrescendo',
                    'created_at' => '2026-03-06 02:11:50',
                    'updated_at' => '2026-03-06 14:02:29',
                ),
                59 => 
                array (
                    'id' => 60,
                    'edition_id' => 4,
                    'title' => 'Pelle diamante',
                    'collaborators' => 'M. Bella, M. Rettani, S. Cirenga e A. Simoncini',
                    'position' => 29,
                    'lyrics' => 'Dici che come me non ne trovi nessuna
Sì, vabbè, poi però lo ripeti ad ognuna
Non ho bisogno di abbracci, mi fanno strano
Ma fidati, lo capisci se ti amo
Forte, tosta, indipendente
Pelle come diamante, non mi fa male niente
Stronza, forse, ma sorprendente
Una mina vagante, sono una combattente
Fammi mille complimenti e stop
Tanto i miei difetti già li so
Forte, tosta, indipendente
Non mi tocca niente
Ridi e mi chiami miss e mi provochi in pieno
Però poi dici sì a ogni cosa che chiedo
Mi vedi? Star quality
Volitiva, niente alibi
La mia più grande fan sono io
Forte, tosta, indipendente
Pelle come diamante, non mi fa male niente
Stronza, forse, ma sorprendente
Una mina vagante, sono una combattente
Fammi mille complimenti e stop
Tanto i miei difetti già li so
Forte, tosta, indipendente
Non mi tocca niente
Se ti sembro solo una
Voglio dimostrarti che
L\'altra faccia della Luna
Non la vedi, eppure c\'è
Ti darò il cuore
E se è un errore
Mi rende ancora più
Forte, tosta, indipendente
Pelle come diamante, non mi fa male niente
Stronza, forse, ma sorprendente
Una mina vagante, sono una combattente
Fammi mille complimenti e stop
Tanto i miei difetti già li so
Forte, tosta, indipendente
Non mi tocca niente',
                    'created_at' => '2026-03-06 02:12:34',
                    'updated_at' => '2026-03-06 14:02:43',
                ),
                60 => 
                array (
                    'id' => 62,
                    'edition_id' => 5,
                    'title' => 'La noia',
                    'collaborators' => 'A. Mango, Madame e Dardust',
                    'position' => 1,
                    'lyrics' => 'Quanti disegni ho fatto
Rimango qui e li guardo
Nessuno prende vita
Questa pagina è pigra
Vado di fretta
E mi hanno detto che la vita è preziosa
Io la indosso a testa alta sul collo
La mia collana non ha perle di saggezza
A me hanno dato le perline colorate
Per le bimbe incasinate con i traumi
Da snodare piano piano con l\'età
Eppure sto una Pasqua, guarda, zero drammi
Quasi quasi cambio di nuovo città
Che a stare ferma a me mi viene, a me mi viene
La noia
La noia
La noia
La noia
Muoio senza morire, in questi giorni usati
Vivo senza soffrire, non c\'è croce più grande
Non ci resta che ridere in queste notti bruciate
Una corona di spine sarà il dress-code per la mia festa
Ah, è la cumbia della noia, mmh
È la cumbia della noia
Total
Ah, è la cumbia della noia
È la cumbia della noia
Total
Quanta gente nelle cose vede il male
Viene voglia di scappare come iniziano a parlare
E vorrei dirgli che sto bene ma poi mi guardano male
Allora dico che è difficile campare
Business, parli di business
Intanto chiudo gli occhi per firmare i contratti, mmh
Princess, ti chiama "princess"
Allora adesso smettila di lavare i piatti
Muoio senza morire, in questi giorni usati
Vivo senza soffrire, non c\'è croce più grande
Non ci resta che ridere in queste notti bruciate
Una corona di spine sarà il dress-code per la mia festa
Ah, è la cumbia della noia
È la cumbia della noia
Total
Ah, è la cumbia della noia
È la cumbia della noia
Total
Allora scrivi canzoni?
Sì, le canzoni d\'amore
E non ti voglio annoiare
Ma qualcuno le deve cantare
Cumbia, ballo la cumbia
Se rischio di inciampare almeno fermo la noia
Quindi faccio una festa, faccio una festa
Perché è l\'unico modo per fermare, per fermare, per fermare, ah
La noia
La noia
La noia
La noia
Muoio perché morire rende i giorni più umani
Vivo perché soffrire fa le gioie più grandi
Non ci resta che ridere in queste notti bruciate
Una corona di spine sarà il dress-code per la mia festa
È la cumbia della noia
È la cumbia della noia
Total
Ah, è la cumbia della noia
È la cumbia della noia
Total
Total',
                    'created_at' => '2026-03-06 16:49:11',
                    'updated_at' => '2026-03-06 16:49:11',
                ),
                61 => 
                array (
                    'id' => 63,
                    'edition_id' => 5,
                    'title' => 'I p\' me, tu p\' te',
                    'collaborators' => 'E. Palumbo, P. Antonacci, D. Simonetta, Michelangelo, D. Totaro, F. D\'Alessio e G. Petito',
                    'position' => 2,
                    'lyrics' => 'Nuje simmo ddoje stelle ca stanno precipetanno
Te staje vestenno consapevole ca t’hê ‘a spuglià
Pure ‘o mmale ce fa bbene, ‘nzieme io e te
C’ammo sperato ‘e stà pe sempe ‘nzieme io e te
No, no, no, comme se fà
No, no, no, a te scurdò?
Pe mo no, nn”o ppozzo fà
Si nn’ce stive, t’er”a ‘nventà
‘A felicità quanto costa si ‘e sorde nn”a ponno accattà
Aggio sprecato tiempo a parlà
Nun l”ess”a penzato maje
Ca ll’inizio d”a storia era ggià ‘a fine d” storia pe nuje
‘O cielo ce sta guardanno
E quanto chiove e pecché
S’è dispiaciuto pe’mmé e pe’tté
Picciò mo sta inizianno a chiovere
Simmo duje estranei ca se ‘ncontrano
E stevo penzanno a tutte le cose che ho fatto
E tutto quello che ho perso, non posso fare nient’altro

I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté

Tu me ‘ntrappole abbracciannome
Pure ‘o diavolo era n’angelo
Comme me puó amà si nun t’amo
Comme puó vulá senz’ale, no
È passato tantu tiempo d’a ll’ultima vota
Damme n’atu poco ‘e tiempo pe ll’ultima vota
No, no, no, comme se fá
No, no, no, a te scurdá?
Pe mo no, nn”o ppozzo fá
Nun l”ess”a penzato maje
Ca ll’inizio d”a storia era ggià ‘a fine d” storia pe nuje
‘O cielo ce sta guardanno
E quanto chiove e pecché
S’è dispiaciuto pe’mmé e pe’tté
Picciò mo sta inizianno a chiovere
Simmo duje estranei ca se ‘ncontrano
E stevo penzanno a tutte le cose che ho fatto
E tutto quello che ho perso, non posso fare nient’altro

I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté

‘Sta notte è sulo d”a nosta
Si vuó truanne ‘a luna, ‘a vaco a pigliá e ta porto
E pure si ‘o facesse, tu nun fusse cuntenta
Vulisse tutt”e stelle, vulesse cchiù tiempo cu’tté
Picciò mo sta inizianno a chiovere
Simmo dduje estranei ca se ‘ncontrano
E stevo penzanno a tutte le cose che ho fatto
E tutto quello che ho perso, non posso fare nient’altro
I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté
I’ pe’mmé, tu pe’tté',
                    'created_at' => '2026-03-06 16:50:55',
                    'updated_at' => '2026-03-06 16:50:55',
                ),
                62 => 
                array (
                    'id' => 64,
                    'edition_id' => 5,
                    'title' => 'Sinceramente',
                    'collaborators' => 'Annalisa, D. Simonetta, P. Antonacci e S. Tognini',
                    'position' => 3,
                    'lyrics' => 'Mi sveglio ed è passata solo un\'ora
Non mi addormenterò
Ancora otto lune nere e tu la nona
E forse me lo merito
La vuoi la verità? Ma quale verità?
Ti dico la sincera o quella più poetica?
Mi sento scossa, ah, ma quanto male fa?
Come morire, ma non capita
Sinceramente quando, quando, quando, quando piango
Anche se a volte mi nascondo
Non mi sogno di tagliarmi le vene
Sto tremando, sto tremando
Sto facendo un passo avanti e uno indietro
Di nuovo sotto un treno
E mi piace quando, quando, quando, quando piango
Anche se poi cadesse il mondo
Non mi sogno di morire di sete
Sto tremando, sto tremando
Sto lasciando dei chiari di luna indietro
E tu non sei leggero
Sinceramente (na, na-na, na-na)
Sinceramente (na, na-na, na-na)
Sinceramente (na, na-na, na-na)
Sinceramente tua
Solo tu, tu spegni sigarette su velluto blu
Mi lasci sprofondare prima e dopo su
Appena mi riprendo
Ti lascio un messaggio adesso
Sinceramente quando, quando, quando, quando piango
Anche se a volte mi nascondo
Non mi sogno di tagliarmi le vene
Sto tremando, sto tremando
Sto facendo un passo avanti e uno indietro
Di nuovo sotto un treno
E mi piace quando, quando, quando, quando piango
Anche se poi cadesse il mondo
Non mi sogno di morire di sete
Sto tremando, sto tremando
Sto lasciando dei chiari di luna indietro
E tu non sei leggero
Sinceramente (na, na-na, na-na)
Sinceramente (na, na-na, na-na)
Sinceramente (na, na-na, na-na)
Sinceramente tua (na, na-na, na-na)
Ma sono solo parole e dopo il vuoto
Sono bagliori, non è oro
Sinceramente quando, quando, quando, quando piango
Anche se a volte mi nascondo
Non mi sogno di tagliarmi le vene
Sto tremando, sto tremando
Sto facendo un passo avanti e uno indietro
Di nuovo sotto un treno
Sinceramente (na, na-na, na-na)
Sinceramente tua (na, na-na, na-na)
Sinceramente tua (na, na-na, na-na)
Sinceramente tua (na, na-na, na-na)
E non hai mai capito
Quando, quando, quando, quando (na, na-na, na-na)
Quando mi sento male
Quando, quando, quando, quando (na, na-na, na-na)
Sai già che è tanto se ti mando, mando, mando, mando (na, na-na, na-na)
Solo un messaggio, due parole (na, na-na, na-na)
C\'è scritto sul finale: "Sinceramente tua"',
                    'created_at' => '2026-03-06 16:51:35',
                    'updated_at' => '2026-03-06 16:51:35',
                ),
                63 => 
                array (
                    'id' => 65,
                    'edition_id' => 5,
                    'title' => 'Casa mia',
                    'collaborators' => 'Ghali, D. Petrella e Michelangelo',
                    'position' => 4,
                    'lyrics' => 'Il prato è verde, più verde, più verde
Sempre più verde (sempre più verde)
E il cielo è blu, blu, blu
Molto più blu (ancora più blu)
Ehi
Ma che ci fai qui da queste parti?
Quanto resti e quando parti?
Ci sarà tempo, dai, per salutarci
Non mi dire che ho fatto tardi
Siamo tutti zombie col telefono in mano
Sogni che si perdono in mare
Figli di un deserto lontano
Zitti, non ne posso parlare
Ai miei figli cosa dirò?
Benvenuti nel Truman Show
Non mi chiedere come sto
Vorrei andare via però
La strada non porta a casa
Se la tua casa non sai qual è
Ma il prato è verde, più verde, più verde
Sempre più verde (sempre più verde)
E il cielo è blu, blu, blu
Molto più blu (ancora più blu)
Non mi sento tanto bene, però
Sto già meglio se mi fai vedere
Il mondo come lo vedi tu
Non mi serve un\'astronave, lo so
Casa mia o casa tua
Che differenza c\'è? Non c\'è
Ma qual è casa mia?
Ma qual è casa tua?
Ma qual è casa mia?
Dal cielo è uguale, giuro
Mi manca la mia zona
Mi manca il mio quartiere
Adesso c\'è una sparatoria
Baby, scappa via dal dancefloor
Sempre stessa storia
Di alzare un polverone non mi va
Ma come fate a dire
Che qui è tutto normale?
Per tracciare un confine
Con linee immaginarie bombardate un ospedale
Per un pezzo di terra o per un pezzo di pane
Non c\'è mai pace
Ma il prato è verde, più verde, più verde
Sempre più verde (sempre più verde)
E il cielo è blu, blu, blu
Molto più blu (ancora più blu)
Non mi sento tanto bene, però
Sto già meglio se mi fai vedere
Il mondo come lo vedi tu
Non mi serve un\'astronave, lo so
Casa mia o casa tua
Che differenza c\'è? Non c\'è
Ma qual è casa mia?
Ma qual è casa tua?
Ma qual è casa mia?
Dal cielo è uguale, giuro',
                    'created_at' => '2026-03-06 16:52:16',
                    'updated_at' => '2026-03-06 16:52:16',
                ),
                64 => 
                array (
                    'id' => 66,
                    'edition_id' => 5,
                    'title' => 'Tu no',
                    'collaborators' => 'Irama, G. Nenna, G. Colonnelli, F. Monti ed E. Mattozzi',
                    'position' => 5,
                    'lyrics' => 'Ma tu no, tu no, tu no, tu no
Quando non c\'eri e non stavo in piedi
Avrei voluto aggrapparmi a un ricordo soltanto per vivere
E griderò forte ma non starò meglio
Cado, ma in fondo me lo merito
Il fondo è così gelido, no
Tu no, tu no, tu no
Tu sorridevi, cercavi un modo per proteggermi
Però non c\'eri quando volevo che tu fossi qui
Bastasse solo una stupida canzone per riuscire a riportarti da me
Soltanto un\'ultima canzone per riuscire a ricordarmi di te, di te
Quando non c\'eri, passavano i mesi
E in un secondo tutto intorno era invisibile
E dimenticherò chi sei, mi dimenticherò di te
E non lascerò, non ti lascerò
Ancora una volta vedermi crollare
E mi innamorerò di lei
Ma tu non saprai mai chi è
Cado, ma in fondo me lo merito
Il fondo è così gelido, no
Tu no, tu no, tu no
Tu sorridevi, cercavi un modo per proteggermi
Però non c\'eri quando volevo che tu fossi qui
Bastasse solo una stupida canzone per riuscire a riportarti da me
Soltanto un\'ultima canzone per riuscire a ricordarmi di te, di te
Non posso riportarti da me
Tu sorridevi, cercavi un modo per proteggermi
Però non c\'eri quando volevo che tu fossi qui
Bastasse solo una stupida canzone per riuscire a riportarti da me
Soltanto un\'ultima canzone per riuscire a ricordarmi di te',
                    'created_at' => '2026-03-06 16:52:56',
                    'updated_at' => '2026-03-06 16:52:56',
                ),
                65 => 
                array (
                    'id' => 67,
                    'edition_id' => 5,
                    'title' => 'Tuta gold',
                    'collaborators' => 'Mahmood, J. Ettorre e F. Catitti',
                    'position' => 6,
                    'lyrics' => 'Se partirò a Budapest, ti ricorderai
Dei giorni in tenda, quella moonlight
Fumando fino all\'alba, non cambierai
E non cambierò, fottendomi la testa in un night
Soffrire può sembrare un po\' fake
Se curi le tue lacrime ad un rave
Maglia bianca, oro sui denti, blue jeans
Non paragonarmi a una bitch così
Non era abbastanza, noi soli sulla Jeep
Ma non sono bravo a rincorrere
Cinque cellulari nella tuta gold
Baby, non richiamerò
Ballavamo nella zona nord
Quando mi chiamavi fra\'
Con i fiori, fiori nella tuta gold
Tu ne fumavi la metà
Mi passerà, ricorderò
I gilet neri pieni di zucchero
Cambio il numero
Cinque cellulari nella tuta gold
Baby, non richiamerò
Dov\'è la fiducia? Diventata arida
È come l\'aria del Sahara
Mi raccontavi storie di gente senza dire
Mai il nome, nome, nome
Come l\'amico tuo in prigione, ma
A stare nel quartiere serve fottuta personalità
Se partirai, dimmi tua madre chi la consolerà?
Maglia bianca, oro sui denti, blue jeans
Non paragonarmi a una bitch così
Non era abbastanza, noi soli sulla Jeep
Ma non sono bravo a rincorrere
Cinque cellulari nella tuta gold
Baby, non richiamerò
Ballavamo nella zona nord
Quando mi chiamavi fra\'
Con i fiori, fiori nella tuta gold
Tu ne fumavi la metà
Mi passerà, ricorderò
I gilet neri pieni di zucchero
Cambio il numero
Cinque cellulari nella tuta gold
Baby, non richiamerò
Mi hanno fatto bene le offese
Quando fuori dalle medie le ho prese e ho pianto
Dicevi, "Ritornatene al tuo paese"
Lo sai che non porto rancore
Anche se papà mi richiederà
Di cambiare cognome
Ballavamo nella zona nord
Quando mi chiamavi fra\'
Con i fiori, fiori nella tuta gold
Tu ne fumavi la metà
Mi passerà, ricorderò
I gilet neri pieni di zucchero
Cambio il numero
Cinque cellulari nella tuta gold
Baby, non richiamerò
Cinque cellulari nella tuta gold
Baby, non richiamerò',
                    'created_at' => '2026-03-06 16:53:34',
                    'updated_at' => '2026-03-06 16:53:34',
                ),
                66 => 
                array (
                    'id' => 68,
                    'edition_id' => 5,
                    'title' => 'Pazza',
                    'collaborators' => 'L. Chiaravalli, A. Bonomo, L. Bertè e A. Pugliese',
                    'position' => 7,
                    'lyrics' => 'Sono sempre la ragazza
Che per poco già s\'incazza
Amarmi non è facile
Purtroppo io mi conosco
Okay, ti capisco
Se anche tu te ne andrai via da me
Col cuore ti ho spremuto come un dentifricio
E nella testa fuochi d\'artificio
Adesso vado dritta ad ogni bivio
Va bene, sono pazza che c\'è, che c\'è
Io sono pazza di me, di me
E voglio gridarlo ancora
Non ho bisogno di chi mi perdona, io
Faccio da sola, da sola
E sono pazza di me
Sì, perché mi sono odiata abbastanza
Prima ti dicono, "Basta, sei pazza" e poi
Poi ti fanno santa
Io cammino nella giungla
Con gli stivaletti a punta
E ballo sulle vipere
Non mi fa male la coscienza
E mi faccio una carezza
Perché non riesco a chiederle
Col cuore ti ho spremuto come un dentifricio
E nella testa fuochi d\'artificio
E se in giro è tutto un manicomio
Io sono la più pazza che c\'è, che c\'è
Io sono pazza di me, di me
E voglio gridarlo ancora
Non ho bisogno di chi mi perdona, io
Faccio da sola, da sola
E sono pazza di me
Sì, perché mi sono odiata abbastanza
Prima ti dicono, "Basta, sei pazza" e poi
Poi ti fanno santa
Scusa se ti ho fatto male
Forse non sono normale, o forse (forse)
Io sono pazza di me, di me
E voglio gridarlo ancora
Non ho bisogno di chi mi perdona, io
Faccio da sola, da sola
E sono pazza di me
Sì, perché mi sono odiata abbastanza
Prima ti dicono, "Basta, sei pazza" e poi
Poi ti fanno santa',
                    'created_at' => '2026-03-06 16:54:10',
                    'updated_at' => '2026-03-06 16:54:10',
                ),
                67 => 
                array (
                    'id' => 69,
                    'edition_id' => 5,
                    'title' => 'Capolavoro',
                    'collaborators' => 'S. Marletta, E. Roberts e M. Tenisci',
                    'position' => 8,
                    'lyrics' => 'Io che sto seduto dentro a un cinema
A sognare un po\' d\'America e un po\' di casa tua
E mi chiedo sempre quanto durerà
Questo amore infinito che infinito non è
Io che mi sentivo perso, una vela in mare aperto
E all\'improvviso tu, tu
Cadi dal cielo come un capolavoro
Prima di te non c\'era niente di buono
E come se, tu fossi l\'unica luce a dare un senso
E questa vita con te è un capolavoro
Guarda come sta piovendo, ma è stupendo averti qua
Maledetto tempo che ti da e poi ti porta via
Io che mi sentivo perso come un fiore nel deserto
E all\'improvviso tu, tu
Cadi dal cielo come un capolavoro
Prima di te non c\'era niente di buono
E come se, tu fossi l\'unica luce a dare un senso
E questa vita con te è un capolavoro
Cadi dal cielo come un capolavoro
Prima di te non c\'era niente di buono
E come se, tu fossi l\'unica luce a dare un senso
E questa vita con te, sì la mia vita con te
È un capolavoro',
                    'created_at' => '2026-03-06 16:54:48',
                    'updated_at' => '2026-03-06 16:54:48',
                ),
                68 => 
                array (
                    'id' => 70,
                    'edition_id' => 5,
                    'title' => 'Fino a qui',
                    'collaborators' => 'A. Amoroso, J. Ettorre, F. Abbate, F. Clemente, A. F. Merli e P. Pasini',
                    'position' => 9,
                    'lyrics' => 'Roma dorme per miracolo
Le sue piazze, i suoi caffè
Caramelle antipanico alle 2:43
Un\'altra notte di pioggia
Scivola come una goccia
Non sanno che sto male
Forse nemmeno gli importa
Prendo la borsa, esco di corsa
Fuori un freddo cane
Io che da sola non so stare
Ad occhi chiusi sopra la follia
Basta solo un po\' di vento e tutto vola via
Sarà che questa vita non la prendo mai sul serio
E che magari un giorno me ne pento, ma ora no
E anche se lentamente cado giù da un grattacielo
Durante il volo piano dopo piano mi ripeto
"Fino a qui tutto bene"
Ma che sarà mai se ti sembro un po\' smarrita
In questa notte infinita so chi sono io
Nello spazio, una formica
Che si perde tra i vicoli di questa città
Che mi ascolta come nessun altro ha fatto mai con me
Va bene, io prendo la borsa
Esco di corsa fuori il temporale
Io che da sola non so stare
Ad occhi chiusi sopra la follia
Basta solo un po\' di vento e tutto vola via
Sarà che questa vita non la prendo mai sul serio
E che magari un giorno me ne pento, ma ora no
E anche se lentamente cado giù da un grattacielo
Durante il volo piano dopo piano mi ripeto
"Fino a qui tutto bene"
E quante notti sono stata sveglia
A disegnare sul soffitto anche solo una stella
A sentirmi come Sally
Senza avere più voglia di fare la guerra
E poi cadere, cadere, cadere, cadere, cadere giù
Sarà che questa vita non la prendo mai sul serio
E che magari un giorno me ne pento, ma ora no
E anche se lentamente cado giù da un grattacielo
Durante il volo piano dopo piano mi ripeto
"Fino a qui tutto bene"',
                    'created_at' => '2026-03-06 16:55:40',
                    'updated_at' => '2026-03-06 16:55:40',
                ),
                69 => 
                array (
                    'id' => 71,
                    'edition_id' => 5,
                    'title' => 'Vai!',
                    'collaborators' => 'Alfa, M. A. Jackson e I. Scott',
                    'position' => 10,
                    'lyrics' => 'Mi han detto che il destino te lo crei soltanto tu
Vai a tempo col respiro e se corri ne avrai di più
Ma se morirò da giovane
Spero che sia dal ridere
Mi han detto se ti senti così vivo
Non guardare indietro mai e vai, uh-uh
Non guardare indietro mai e vai, uh-uh
Non guardare indietro e vai, vai
Mi han detto punta al sole ma non come Icaro
Che il mondo è troppo grande per pensare in piccolo
Ma se morirò da giovane
Qualcosa avrò da scrivere
Mi han detto aspetta che arrivi il mattino
Dopo prendi tutto e vai
Io voglio solo vivere
Sia piangere che ridere
Il cielo sarà il limite
Se stai via dalla strada e via dai guai
Tu non guardare indietro mai e vai, uh-uh
Io voglio solo vivere
E piangere dal ridere
Il cielo sarà il limite
Se stai via dalla strada e via dai guai
Tu non guardare indietro mai e vai, uh-uh
Non guardare indietro mai e vai, uh-uh
Non guardare indietro e vai
Mi han detto tempo al tempo
E non avere fretta più
Ricordo che cantavo lì disteso nel letto
Sognandomi cantare ma dentro a un palazzetto
Provo a inseguire il vento ma se va fuori rotta
Punterò al cielo aperto e vedo dove mi porta
Perché anche se non sai dove vai
L\'importante è solo che vai, che vai, che vai
Io voglio solo vivere
Sia piangere che ridere
Il cielo sarà il limite
Se stai via dalla strada e via dai guai
Tu non guardare indietro mai e vai, uh-uh
Io voglio solo vivere
E piangere dal ridere
Il cielo sarà il limite
Se stai via dalla strada e via dai guai
Tu non guardare indietro mai e vai, uh-uh
Non guardare indietro mai e vai, uh-uh
Non guardare indietro mai e vai, uh-uh
E vai, uh-uh
Se stai via dalla strada e via dai guai
Tu non guardare indietro mai e vai',
                    'created_at' => '2026-03-06 16:56:11',
                    'updated_at' => '2026-03-06 16:56:11',
                ),
                70 => 
                array (
                    'id' => 72,
                    'edition_id' => 5,
                    'title' => 'Tutto qui',
                    'collaborators' => 'Gazzelle e F. Nardelli',
                    'position' => 11,
                    'lyrics' => 'Lo so che sei stanca, lo sono anch\'io
Sembriamo due panda, amore mio
Ed ogni mattina ti svegli e pensi
"Boh, chissà com\'è che oggi tutte a me"
Ma chiamami quando riatterri sul mondo perché
Mi stringo un po\' e sposto un po\' di me
Vorrei guardare il passato con te
Addosso al muro col proiettore
Viverlo insieme un minuto anche tre
Scappare per un po\' da Roma Nord
Lo sai che sei matta, lo sono anch\'io
Hai perso la calma appresso al mio
Cuore che tutte le notti fa
"Ah"
E sai com\'è, mi sa che c\'entri te
Ma chiamami quando ripasserai da casa mia
Che scendo un po\' o sali tu da me
Vorrei guardare il passato con te
Addosso al muro col proiettore
Viverlo insieme un minuto anche tre
Scappare per un po\' da Roma Nord
(Da Roma Nord)
Perché, perché, perché
Perché ogni tanto è giusto stare anche così
Con il terrore, sai, di perdersi
E questa vita non impara mai
Ma domani, domani, domani potremmo anche ridere
O almeno sorridere
Tutto qui
Vorrei guardare il soffitto con te
Stesi sul letto col raffreddore
Chiudere gli occhi e vedere com\'è
Chiudere gli occhi e vedere com\'è',
                    'created_at' => '2026-03-06 16:56:47',
                    'updated_at' => '2026-03-06 16:56:47',
                ),
                71 => 
                array (
                    'id' => 73,
                    'edition_id' => 5,
                    'title' => 'Fragili',
                    'collaborators' => 'G. L. Senia, I. Sinigaglia, F. Aprili, P. Zou e G. Di Mario',
                    'position' => 12,
                    'lyrics' => 'Le tue pupille sembrano pallottole, se mi guardi mi ferisci
Ho dei pensieri che alzano la voce, ma vorrei farli stare zitti
Tu sai che avevo bisogno d\'aiuto, potevi pure mandarmi a fanculo
Invece mi hai detto che gli occhi che indosso non sono mai stati più tristi
Ma se un giorno il vento ti portasse indietro
Dalle mie promesse, come se piovessero
Da un cielo nero lacrime di vetro
Perché ancora sento il tuo rumore dentro
E siamo fragili
Come la neve, come due crepe
E so che non è facile
Volersi bene, stare in catene
Scusami, ma può succedere
E scusami se ti ho fatto del male
Ma siamo fragili
Come la neve, come due crepe
Odio convivere con i demoni fissi nella mia testa
Il senso di colpa mi fa sentire una bestia
Vorrei dirti: "Resta", sì, ti prego, resta, ma grido: "Vattene!"
Perché sento la tempesta sotto le palpebre
E tu sei libera, ah, sei come un\'isola, ah
Nessuno ti abita, mi rubi l\'anima
E vorrei tornare indietro nel tempo
Sei la sete nel mio deserto
Sei come le fiamme che bruciano nell\'inferno
Adesso mi sento come un naufrago in mare aperto
E se potessi scapperei dai ricordi che sono vipere
Perché mi fanno male e mi potrebbero uccidere
Voglio averti ancora addosso però non posso
Non voglio lasciarti andare, non sono pronto
Ma siamo fragili
Come la neve, come due crepe
E so che non è facile
Volersi bene, stare in catene
Scusami, ma può succedere
E scusami se ti ho fatto del male
Ma siamo fragili
Come la neve, come due crepe
In questo mare nero ci sei solo tu
Sei la mia isola, ah, forse mi ucciderai, ma
Volevo solo restarci di più
Ma siamo fragili
Come la neve, come due crepe
E so che non è facile
Volersi bene, stare in catene
Scusami, ma può succedere
E scusami se ti ho fatto del male
Ma siamo fragili
Come la neve, come due crepe',
                    'created_at' => '2026-03-06 16:57:25',
                    'updated_at' => '2026-03-06 16:57:25',
                ),
                72 => 
                array (
                    'id' => 74,
                    'edition_id' => 5,
                    'title' => 'Ti muovi',
                    'collaborators' => 'Diodato',
                    'position' => 13,
                    'lyrics' => 'Cosa ci fai qui?
Non vorrai mica deludermi
Hai sciolto le catene
Che abbiamo stretto insieme
Per tenerci lontani
E già mi parli così
Ma a cosa serve ora insistere?
Me lo ricordo bene
Il nostro tempo insieme
Me lo ricordo
Ma anche se sai che è inutile
Anche se sai che è inutile
Tu ancora ti muovi
Qui dentro ti muovi
Cerchi l\'ultima parte di me
Che crede ancora che sia possibile
Davvero è questo quel che vuoi?
Un sorso di veleno e poi
Un altro gioco di parole
Un\'altra dose di dolore
Ma ormai sei già nella tempesta
Non puoi pensare a ciò che resta
E vuoi toccare il fondo, andare a fondo, fino in fondo
E ancora ti muovi
Qui dentro ti muovi
Cerchi l\'ultima parte di me
Che crede ancora che sia possibile
Che se poi mi trovi, tu ancora mi trovi
Forse un\'ultima parte di me
Crede davvero che sia possibile
Se ancora ci sei
Se in mezzo a tutto il resto ancora ci sei
Forse esiste una parte di me
Che spera ancora che sia possibile',
                    'created_at' => '2026-03-06 16:58:06',
                    'updated_at' => '2026-03-06 16:58:06',
                ),
                73 => 
                array (
                    'id' => 75,
                    'edition_id' => 5,
                    'title' => 'Apnea',
                    'collaborators' => 'Emma, D. Petrella, P. Antonacci e J. Boverod',
                    'position' => 14,
                    'lyrics' => 'Ci incontriamo qui nei corridoi
Di un albergo, e mi chiedo
Se alla fine siamo ancora noi
O è diverso, io non credo
Trovale tu le parole
Nelle onde del televisore o del mare
Io se avessi un telecomando
Non ti cambierei mai
Io non so dove sto andando
Dimmi tu dove vai
Ti lascio un altro messaggio
Ma che te ne farai?
Dimmelo quanto ti manco
Tu già lo sai
È colpa mia
Se adesso siamo in bilico
Ma è colpa tua
Hai gli occhi che mi uccidono
Lo sai però
Mi fai sentire il brivido di stare bene
Di stare insieme
E non è una bugia di quelle che si dicono
Per nostalgia
O solo per sputare via il veleno
Che tanto è tutto vero
Non mi piace niente, ma tu mi togli il respiro
Apnea
Ah-ah, ah-ah, ah-ah
Lasciami stare nel tuo temporale se grandini
Tagliami il cuore se vuoi con un paio di forbici
Chiamo l\'avvocato e gli dico tutto
Che sono cambiata, che sono distrutta
Da quando sei andato perché
Non ho capito un cazzo di te
Scusami, non parliamone più
C\'hai ragione tu
È colpa mia
Se adesso siamo in bilico
Ma è colpa tua
Hai gli occhi che mi uccidono
Lo sai però
Mi fai sentire il brivido di stare bene
Di stare insieme
E non è una bugia di quelle che si dicono
Per nostalgia
O solo per sputare via il veleno
Che tanto è tutto vero
Non mi piace niente, ma tu mi togli il respiro
Apnea
Ah-ah, ah-ah, ah-ah
Ricordati com\'ero
Che tanto è tutto vero
Non mi piace niente, ma tu mi togli il respiro
Dimmi, dimmi, dimmi se ti va di fare tutto con me
Dimmi che rimani tutto quanto il weekend
Senza fare niente
Senza niente di che
Toglimi il respiro
Apnea
Ah-ah, ah-ah, ah-ah
Ricordati com\'ero
Che tanto è tutto vero
Non mi piace niente, ma tu mi togli il respiro
Apnea',
                    'created_at' => '2026-03-06 16:58:47',
                    'updated_at' => '2026-03-06 16:58:47',
                ),
                74 => 
                array (
                    'id' => 76,
                    'edition_id' => 5,
                    'title' => 'Mariposa',
                    'collaborators' => 'F. Mannoia, C. Di Francesco, Cheope, F. Abbate e M. Cerri',
                    'position' => 15,
                    'lyrics' => 'Sono la strega in cima al rogo
Una farfalla che imbraccia il fucile
Una regina senza trono
Una corona d\'arancio e di spine
Sono una fiamma tra le onde del mare
Sono una sposa sopra l\'altare
Un grido nel silenzio che si perde nell\'universo
Sono il coraggio che genera il mondo
Sono uno specchio che si è rotto
Sono l\'amore, un canto, il corpo
Un vestito troppo corto
Una voglia, un desiderio
Sono le quinte di un palcoscenico
Una città, un impero
Una metà, sono l\'intero
Ahi, ahi, ahi, ahi, ahi, ahi, ahi
Ahi, ahi, ahi, ahi, ahi, ahi, ahi
Mi chiamano con tutti i nomi
Tutti quelli che mi hanno dato
E nel profondo sono libera
Orgogliosa e canto
Ho vissuto in un diario
In un poema e poi in un campo
Ho amato in un bordello
E mentito, non sai quanto
Sono sincera, sono bugiarda
Sono volubile, sono testarda
L\'illusione che ti incanta
La risposta e la domanda
Sono la moda, l\'amore e il vanto
Sono una madonna e il pianto
Sono stupore e meraviglia
Sono negazione e orgasmo
Nascosta dietro a un velo
Profonda come un mistero
Sono la terra, sono il cielo
Valgo oro e meno di zero
Ahi, ahi, ahi, ahi, ahi, ahi, ahi
Ahi, ahi, ahi, ahi, ahi, ahi, ahi
Mi chiamano con tutti i nomi
Tutti quelli che mi hanno dato
E anche nel buio sono libera, orgogliosa e canto
Sono stata tua e di tutti
Di nessuno e di nessun altro
Con le scarpe e a piedi nudi
Nel deserto e anche nel fango
Una, nessuna, centomila
Madre, figlia, luna nuova
Sorella, amica mia
Io ti do la mia parola
Ahi, ahi, ahi, ahi, ahi, ahi, ahi
Ahi, ahi, ahi, ahi, ahi, ahi, ahi
Mi chiamano con tutti i nomi
Tutti quelli che mi hanno dato
Ma nel profondo sono libera, orgogliosa e canto
Mi chiamano con tutti i nomi
Con tutti quelli che mi hanno dato
E per sempre sarò libera, e orgogliosa canto',
                    'created_at' => '2026-03-06 16:59:28',
                    'updated_at' => '2026-03-06 16:59:28',
                ),
                75 => 
                array (
                    'id' => 77,
                    'edition_id' => 5,
                    'title' => 'Un ragazzo una ragazza',
                    'collaborators' => 'A. Fiordispino, D. Petrella, F. Catitti e A. Fiordispino',
                    'position' => 16,
                    'lyrics' => '… Serve un\'idea
Continentale
Vorrei parlarti e mi vergogno come un cane
Tu aspetti il treno
Io al cellulare
Non trovo l\'asso da giocare
Ma ormai, ai, ai
… Lo sai che quando pensi di star bene poi ci rimani sotto
E lo sai, l\'amore non si può cantare in una strofa da otto
È uguale, però sento la pelle bruciare, eh
Tanto con te rischio male, eh
Ma se mi guardi così
Se mi guardi così (è sempre la stessa storia)
… Un ragazzo incontra una ragazza
La notte poi non passa
La notte se ne va
Un ragazzo incontra una ragazza
Le labbra sulle labbra
Poi che succederà?
… E comprerei per te la luna se c\'avessi money
Solo per cantarti ancora un po\'
Un ragazzo incontra una ragazza
La notte poi non passa
Vedrai, non finirà
… Serve un\'idea
Più del pane
Vorrei parlarti, ma ho paura di ghiacciare
Siamo un incrocio
Fondamentale
E avrei bisogno di una chiave
Ma ormai, ai, ai
… Lo sai che sei un proiettile nel cuore, però avevo il giubbotto
E lo sai, cercarti è un po\' come aspettare ad un semaforo rotto
È uguale però sento la pelle bruciare, eh
Tanto con te rischio male, eh
Ma se mi guardi così
Se mi guardi così (è sempre la stessa storia)
… Un ragazzo incontra una ragazza
La notte poi non passa
La notte se ne va
Un ragazzo incontra una ragazza
Le labbra sulle labbra
Poi che succederà?
… E comprerei per te la luna se c\'avessi money
Solo per cantarti ancora un po\'
Un ragazzo incontra una ragazza
La notte poi non passa
Vedrai, non finirà
… È inutile parlare per ore
Chi ha torto e chi ha ragione
Dimenticando quasi che non c\'è niente di più
Un ragazzo incontra una ragazza
Un ragazzo incontra una ragazza
Un ragazzo incontra una ragazza
La notte poi non passa
La notte se ne va
… Un ragazzo incontra una ragazza
Le labbra sulle labbra
Poi che succederà?
… Un ragazzo incontra una ragazza
La notte poi non passa
Vedrai, non finirà',
                    'created_at' => '2026-03-06 17:00:21',
                    'updated_at' => '2026-03-06 17:00:21',
                ),
                76 => 
                array (
                    'id' => 78,
                    'edition_id' => 5,
                    'title' => 'Due altalene',
                    'collaborators' => 'Mr. Rain e L. Vizzini',
                    'position' => 17,
                    'lyrics' => 'Parlarti di quello che sento mi sembra impossibile
Perché non esistono parole per dirti cosa sei per me
Tu mi hai insegnato a ridere
Tu mi hai insegnato a piangere
L\'ho imparato con te che certe volte un fiore cresce anche nelle lacrime
Ma non è facile
Se non sei con me
Io e te fermiamo il mondo quando siamo insieme
Anche se dura un secondo come le comete
Griderò, griderò il tuo nome fino a perdere la voce
Sotto la pioggia, sotto la neve
Sospesi in aria come due altalene
Quante volte ci siamo trovati sul fondo
Passando da un incubo a un sogno
Anche un\'alba diventa un tramonto
A seconda di dove ti trovi nel mondo
Non c\'era nessuno intorno
Però c\'eri tu, lo ricordo
Mi hai curato quelle cicatrici
Che non può guarire nemmeno l\'inchiostro
Ti tengo per mano, anche se cadiamo vado ovunque vai
Andiamo lontano in un posto che non abbiamo visto mai
In mezzo al temporale abbiamo unito i nostri lividi
Come due oceani indivisibili
Ma non è facile
Se non sei con me
Io e te fermiamo il mondo quando siamo insieme
Anche se dura un secondo come le comete
Griderò, griderò il tuo nome fino a perdere la voce
Sotto la pioggia, sotto la neve
Sospesi in aria come due altalene
È come nelle favole, ogni volta tornerò da te
Forse nessuno ci crede
E vincerò solo con te tutte le guerre dentro me
Impareremo a cadere
Io e te fermiamo il mondo quando siamo insieme
Anche se dura un secondo come le comete
Griderò, griderò il tuo nome fino a perdere la voce
Sotto la pioggia, sotto la neve
Sospesi in aria come due altalene',
                    'created_at' => '2026-03-06 17:00:52',
                    'updated_at' => '2026-03-06 17:00:52',
                ),
                77 => 
                array (
                    'id' => 79,
                    'edition_id' => 5,
                    'title' => 'L\'amore in bocca',
                    'collaborators' => 'A. De Santis, M. L. Francese, C. Del Bono, A. Filippelli e D. G. Bestonzo',
                    'position' => 18,
                    'lyrics' => 'Mi hai lasciato con l’amore in bocca
Senza farlo apposta
Sono le ultime gocce di pioggia
Scivoliamo sopra tetti
Prima di cadere a pezzi

Ma l’amaro torna
Ed è la prima volta
La vita che mi togli
Passa dalle mani
Ma tu già lo sai
Che io non sarò mai
Un porto sicuro
In un mare calmo

Mi hai lasciato con l’amore in bocca
Senza farlo apposta
Sono le ultime gocce di pioggia
Scivoliamo sopra tetti
Prima di cadere a pezzi
Lascerò i vestiti per strada
Ti sembrerà strano
Seguire un filo di lana

Ma l’amaro torna
Ed è la prima volta
La rabbia tiene svegli
Tutti gli animali
Ti rivedrò in un quadro
In un ricordo vago
In un porto sicuro
In un mare stanco

Mi hai lasciato con l’amore in bocca
Senza farlo apposta
Sono le ultime gocce di pioggia
Scivoliamo sopra tetti
Prima di cadere a pezzi
Lascerò i vestiti per strada
Ti sembrerà strano
Seguire un filo di lana

Mi hai lasciato con l’amore in bocca
E intanto la tua luce sorge
Forte
Brucia la mia pelle
A volte
Mi racconterai delle tue ombre
E poi mi ci nasconderò

Mi hai lasciato con l’amore in bocca
(Mi hai lasciato con l’amore in bocca)
Lascerò i vestiti per strada
Ti sembrerà strano
Seguire un filo di lana
Mi hai lasciato con l’amore in bocca
Sono le ultime gocce di pioggia',
                    'created_at' => '2026-03-06 17:01:39',
                    'updated_at' => '2026-03-06 17:01:39',
                ),
                78 => 
                array (
                    'id' => 80,
                    'edition_id' => 5,
                    'title' => 'Ricominciamo tutto',
                    'collaborators' => 'G. Sangiorgi',
                    'position' => 19,
                    'lyrics' => 'Quanto tempo ti manca per esser pronta?
Io sono sotto che ti aspetto
Così ti porto al mare
Quanto è passato dall\'ultima volta
Che mi hai detto, sì, mi hai detto
Che ti manca il sale
Che brucia le ferite?
E sulla pelle, tra i capelli, sulla tua bocca
Eravamo ghiaccio che si scioglie in mezzo al nulla
In mezzo a tutta quella neve
Dio, com\'eri bella? (Dio, com\'eri bella?)
E ogni volta che sembra essere tutto perfetto
C\'è sempre un pezzo che ci manca anche sotto il tetto
Non rifacciamo il letto
E allora piove da quel buco sulle teste
Sì, ma non fa niente
Tanto si riparte
Non so nemmeno dove
Tu dici, "Andiamo ovunque, basta sia lontano dalla gente"
E non fa niente, non fa niente
Basta saper andare, andare, andare
Chi se ne frega dove
Quanto è rimasto addosso di quella rincorsa
Che tu hai preso, sì, mi hai preso
Solo per poi cantare "Discese e risalite?"
E sulla pelle, tra i capelli, sulla tua bocca
Eravamo una canzone di Battisti all\'alba
Anche senza bionde trecce
Dio, quanto sei bella?
E allora piove da quel buco sulle teste
Sì, ma non fa niente
Tanto si riparte
Non so nemmeno dove
Tu dici, "Andiamo ovunque, basta sia lontano dalla gente"
E non fa niente, non fa niente
Basta saper andare, andare, andare
Chi se ne frega dove
Ma a me importa solo di poter restare
Fermo sulle mie gambe, qui, ad aspettare
E che sia al mare, che sia dove soffia il vento
Non mi importa
Ricominciamo tutto
E chi se ne fotte di tutti quei sogni
Di una canzone o uno stupido testo?
Io, qui, ti aspetto
Dici che poi ti trovo in un cassetto
Intatto come quel sogno mai fatto?
Uoh-oh-oh-oh-oh, scendi, che ti aspetto
Ricominciamo tutto',
                    'created_at' => '2026-03-06 17:02:18',
                    'updated_at' => '2026-03-06 17:02:18',
                ),
                79 => 
                array (
                    'id' => 81,
                    'edition_id' => 5,
                    'title' => 'Onda alta',
                    'collaborators' => 'D. D\'Amico, E. Roberts, S. Marletta, G. Fazio e Cheope',
                    'position' => 20,
                    'lyrics' => 'C\'è chi mi chiama figlio di puttana
Che c\'è di male?
L\'importante è aver la mamma
Che non lavori troppo che la vita è breve
A volte un mese
Se prendi il treno, sai
Ci metti meno
E non l\'hai visto il meteo?
Non l\'hai visto il cielo?
Ma a volte ci si vuole troppo bene
Anche così, un giovedì, senza un sì, come viene
Come faccio a volere una vita in incognito
Se parlo solo di me?
Se basta un titolo a fare odiare un intero popolo
Non lo conosci Noè? No eh?
Sta arrivando, sta arrivando l\'onda alta
Stiamo fermi, non si parla e non si salta
Senti il brivido, ti ho deluso lo so
Siamo più dei salvagenti sulla barca
Sta arrivando, sta arrivando l\'onda alta
Non ci resta che pregare finché passa
Sembri timido
Mi hai sorriso o no?
Sono già promesso sposo con un\'altra
Ehi, ehi bambino
Questa volta hai fatto proprio un bel casino
Alla contraerea sopra un palloncino
Tutta questa strada per riempire un frigo
Per sentirti vivo
Hai solo un tentativo
Ormai ho deciso, scusa se non ti avviso
Ti mando quello che mi avanza se ci arrivo
Mamma, ti ho sognata che eri bimba
Figlia, ti ho sognata che eri incinta
Quando hai meno, vivi più sereno
Qua abbiamo tutto ma ci manca sentimento
E non riusciamo più a volerci bene
Neanche così, un giovedì, senza un sì, come viene
Come faccio a volere una vita in incognito
Se parlo solo di me? (Seh)
Basta un titolo a fare odiare un intero popolo
Non lo conosci Noè? No eh?
Sta arrivando, sta arrivando l\'onda alta
Stiamo fermi, non si parla e non si salta
Senti il brivido, ti ho deluso lo so
Siamo più dei salvagenti sulla barca
Sta arrivando, sta arrivando l\'onda alta
Non ci resta che pregare finché passa
Sembri timido
Mi hai sorriso o no?
Sono già promesso sposo con un\'altra
Ehi, ehi bambino
Questa volta hai fatto proprio un bel casino
Alla contraerea sopra un palloncino
Tutta questa strada per riempire un frigo
Per sentirti vivo
C\'è una guerra di cuscini
Ma cuscini un po\' pesanti
Se la guerra è dei bambini
La colpa è di tutti quanti
Abbiamo cambiato le idee
Abbiamo cambiato leader
Ma la madre e le altre donne
Non hanno niente da ridere
Ehi, bambino
Bel casino
Su un palloncino
Per riempire un frigo
Navigando, navigando verso Malta
Senza aver nuotato mai nell\'acqua alta
Navigando, navigando verso Malta
Senza aver nuotato mai nell\'acqua alta',
                    'created_at' => '2026-03-06 17:02:52',
                    'updated_at' => '2026-03-06 17:02:52',
                ),
                80 => 
                array (
                    'id' => 82,
                    'edition_id' => 5,
                    'title' => 'Ma non tutta la vita',
                    'collaborators' => 'E. Roberts, Cheope e S. Marletta',
                    'position' => 21,
                    'lyrics' => 'Che confusione il sabato
È quasi peggio di quello che dicono
Con te però c\'è un non so che di magico
C\'è un non so che, un non so che bellissimo
Dimmi quando arrivi, così ti tengo il posto
Prendo già da bere, i tuoi gusti li conosco
Entra che ho lasciato il tuo nome all\'ingresso
Tanto in giro da sola non resto
Anche la più bella rosa diventa appassita
Va bene, ti aspetto, ma non tutta la vita
Ti giri un momento, la notte è finita
Le stelle già stanno cadendo
Dammi retta, scendi adesso in pista
Gira, gira, girerà la testa
Non ti vedo, dove sei finita?
Tanto lo sai che ti aspetto, ma non tutta la vita
Tanto lo sai che ti aspetto, ma non tutta la vita
Lo sanno tutti che il tempo vola via
Neanche te ne accorgi, che giorno siamo oggi
Soffriamo tutti un po\' di mal di mare e nostalgia
È tutto un fuggi e mordi, un metti e dopo togli
Vedo nei tuoi occhi quello sguardo che conosco
E sul collo hai l\'impronta del mio rossetto rosso
Te l\'avevo detto che dovevi fare presto
Perché in giro da sola non resto
Anche la più bella rosa diventa appassita
Va bene, ti aspetto, ma non tutta la vita
Ti giri un momento, la notte è finita
Le stelle già stanno cadendo
Dammi retta, scendi adesso in pista
Gira, gira, girerà la testa
Non ti vedo, dove sei finita?
Tanto lo sai che ti aspetto, ma non tutta la vita
No, no, no, no, non senti un brivido
Non pensarci, no, solo vivilo
Fino a che si può, fino all\'ultimo
Tanto lo sai che ti aspetto, ma non tutta la vita
Anche la più bella rosa diventa appassita
Va bene, ti aspetto, ma non tutta la vita
Ti giri un momento, la notte è finita
Le stelle già stanno cadendo
Dammi retta, scendi adesso in pista
Gira, gira, girerà la testa
Non ti vedo, dove sei finita?
Tanto lo sai che ti aspetto, ma non tutta la vita',
                    'created_at' => '2026-03-06 17:03:29',
                    'updated_at' => '2026-03-06 17:03:29',
                ),
                81 => 
                array (
                    'id' => 83,
                    'edition_id' => 5,
                    'title' => 'La rabbia non ti basta',
                    'collaborators' => 'BigMama, M. L. Lazzerini, Estremo ed E. Brun',
                    'position' => 22,
                    'lyrics' => 'Spalle larghe, la testa sopra ma i sogni ancora più in alto
Parole tante, ma poi strappate da ciò che diceva un altro
Pochi anni ma tanti sbagli che manco facevi tu
Li nascondevi tra lacrime d\'odio che riempiva i tuoi occhi blu
Coi pugni stretti e i pensieri fragili, guardati adesso
Crollavi sempre anche con basi stabili, ma ora detesto
Pensare a te come una di quelli li, che ci hanno perso
Pezzi di loro per darne agli altri
Pezzi di cuore come gli scarti
Guarda me, adesso sono un\'altra
La rabbia non ti basta, hai cose da dire
Se ti perdi segui me
Quel vuoto non ti calma
È il buio che ti mangia e non ti fa dormire
Animo buono ma riempito d\'odio
Per far testa a quello degli altri
Più di un colpo d\'arma da fuoco
E ti restava solo incassarli
È facile distruggere i più fragili
Colpire e poi affondare chi è solo
Copri le lacrime segreti da tenere, non farti scoprire
Lo sai che a casa non devon sapere, cosa dovrai dire
Una figlia che perde chi la vuole avere, quindi apri ferite
Vorresti solo un altro corpo
Ma a quale costo?
Guarda me, adesso sono un\'altra
La rabbia non ti basta, hai cose da dire
Se ti perdi segui me
Quel vuoto non ti calma
È il buio che ti mangia e non ti fa dormire
Non ti fa dormire
Non ti fa dormire
Se potessi andare indietro ti darei una casa vera in cui dormire
Se anche fossi solo vetro ti coprirei per strada e mi farei colpire
Guarda me, adesso sono un\'altra
La rabbia non ti basta, hai cose da dire
Se ti perdi segui me
Quel vuoto non ti calma
È il buio che ti mangia e non ti fa dormire
Credere nei propri sogni salva
Se vuoi ballare, balla
Non puoi sparire
Se ti perdi segui me
Quel vuoto non ti calma
È il buio che ti mangia e non ti fa dormire
Non ti fa dormire
Non ti fa dormire',
                    'created_at' => '2026-03-06 17:04:03',
                    'updated_at' => '2026-03-06 17:04:03',
                ),
                82 => 
                array (
                    'id' => 84,
                    'edition_id' => 5,
                    'title' => 'Click boom!',
                    'collaborators' => 'R. Luini, D. Petrella e A. Ferrara',
                    'position' => 23,
                    'lyrics' => 'Non riesco più ad essere lucida
Il cuore parla e dice: "Stupida"
E ti rincorro per la strada
Anche se è vuota e buia
Se non m\'importa di te
Non m\'importa di me
Piove sopra una lacrima
Perché ho bisogno di te
Giuro, stavolta è l\'ultima
Ti ho fatto entrare nel mio disordine
Senza di te non ho niente da perdere
E non ho mai avuto paura del buio
Ma di svegliarmi con accanto qualcuno
Per me l\'amore è come un proiettile
Ricordo ancora il suono, click, boom, boom, boom
Senti il mio cuore, fa così, boom, boom, boom
Corro da te sopra la mia vroom, vroom, vroom
Prendi la mira baby, click, boom, boom, boom
Boom, boom, boom
Sai che dentro ho un mare nero che s\'illumina?
Sei capace a trasformare il male in musica
E ti ritrovo ovunque vada
Nelle canzoni e in autostrada
Perché sei la mia condanna e la cura
Se non m\'importa di te
Non m\'importa di me
Piove sopra una lacrima
Perché ho bisogno di te
Giuro, stavolta è l\'ultima
Ti ho fatto entrare nel mio disordine
Senza di te non ho niente da perdere
E non ho mai avuto paura del buio
Ma di svegliarmi con accanto qualcuno
Per me l\'amore è come un proiettile
Ricordo ancora il suono, click, boom, boom, boom
Senti il mio cuore, fa così, boom, boom, boom
Corro da te sopra la mia vroom, vroom, vroom
Prendi la mira baby, click, boom, boom, boom
Boom, boom, boom
E giuro che se l\'universo dovesse finire stanotte
Ti seguirei sull\'Everest con tutte le ossa rotte
E ti ritrovo ovunque vada, nelle canzoni e in autostrada
Dove c\'è elettricità
Ti ho fatto entrare nel mio disordine
Senza di te non ho niente da perdere
E non ho mai avuto paura del buio
Ma di svegliarmi con accanto qualcuno
Per me l\'amore è come un proiettile
Ricordo ancora il suono, click, boom, boom, boom
Senti il mio cuore, fa così, boom, boom, boom
Corro da te sopra la mia vroom, vroom, vroom
Prendi la mira baby, click, boom, boom, boom
Boom, boom, boom',
                    'created_at' => '2026-03-06 17:04:41',
                    'updated_at' => '2026-03-06 17:04:41',
                ),
                83 => 
                array (
                    'id' => 85,
                    'edition_id' => 5,
                    'title' => 'Diamanti grezzi',
                    'collaborators' => 'C. Soccini, A. La Cava e F. Catitti',
                    'position' => 24,
                    'lyrics' => 'Siamo caduti più in basso come le cascate
Cercando di prendere il volo sopra queste case
Ho visto in amore persone un po\' troppo sfacciate
Ferirsi lasciandosi le ali spezzate
Dimmelo te se ti piace
Ma si spezza la corda, ci resta poco o nulla
Ma siamo ancora a galla, chissà perché
Siamo la prima volta, quella che non si scorda
Quel bacio con la lingua che fa paura
Scendo tra ventiquattro ore
Cerco per strada l\'amore
Aspetto uno su un milione
Te lo ricordi?
Cosa siamo noi? Solo diamanti grezzi
Cadono in mille pezzi di una storia sola
Dove andremo poi? Se corriamo a fari spenti
Non siamo più gli stessi, non sappiamo ancora
Fare a meno di parole che quando si schiantano lasciano il segno
Corrono sopra i trecento, in mezzo alle strade del centro
Non saremo mai quello che poi ti aspetti
Oro nei fallimenti, solo diamanti grezzi
Cosa c\'è da capire?
Che forse tradire non è il modo giusto, fa solo soffrire
Alla fine il mare è più bello quando non sta fermo
E ti fa sentire meno solo, meno solo, meno solo
Meno vuoto, meno vuoto, ma
Ma si spezza la corda, ci resta poco o nulla
Ma siamo ancora a galla, chissà perché
Siamo la prima volta, quella che non si scorda
Quel bacio con la lingua che fa paura
Cosa siamo noi? Solo diamanti grezzi
Cadono in mille pezzi di una storia sola
Dove andremo poi? Se corriamo a fari spenti
Non siamo più gli stessi, non sappiamo ancora
Fare a meno di parole che quando si schiantano lasciano il segno
Corrono sopra i trecento, in mezzo alle strade del centro
Non saremo mai quello che poi ti aspetti
Oro nei fallimenti, solo diamanti grezzi
Perdiamo tutto
L\'amore è una sala slot
Mi gioco tutto
Da quando non ricordi più (più, più, più)
Cosa siamo noi? Solo diamanti grezzi
Cadono in mille pezzi di una storia sola
Dove andremo poi? Se corriamo a fari spenti
Non siamo più gli stessi, non sappiamo ancora
Fare a meno di parole che quando si schiantano lasciano il segno
Corrono sopra i trecento, in mezzo alle strade del centro
Non saremo mai quello che poi ti aspetti
Oro nei fallimenti, solo diamanti grezzi',
                    'created_at' => '2026-03-06 17:05:15',
                    'updated_at' => '2026-03-06 17:05:15',
                ),
                84 => 
                array (
                    'id' => 86,
                    'edition_id' => 5,
                    'title' => 'Pazzo di te',
                    'collaborators' => 'F. Renga, Nek, D. Mancino e D. Faini',
                    'position' => 25,
                    'lyrics' => 'L\'amore è stupido
Ma ti fa piangere
Prima sorride e poi
Ti vuole uccidere
L\'amore è inutile
È irresponsabile
Tu chiedi aiuto ma
Lui non sa dartene
E per questo, anch\'io
Sono pazzo di te
Non sai come vorrei farne a meno
E lo sa solo Dio
Chi è più pazzo di me
Sotto questo mantello di cielo
L\'amore è un giudice
È un miserabile
Lo trovi in tasca ma
Non lo puoi spendere
L\'amore è nobile
È fatto di un metallo indistruttibile
Ma è così fragile
E per questo, anch\'io
Sono pazzo di te
Non sai come vorrei farne a meno
E lo sa solo Dio
Chi è più pazzo di me
Sotto questo mantello di cielo
Io e te cambiamo la realtà
Perché nessuna verità è così facile
Amarsi è semplice ma ingovernabile
Indispensabile
Non sai come vorrei farne a meno
Forse per questo, anch\'io
Sono pazzo di te
Perché è quello che conta davvero',
                    'created_at' => '2026-03-06 17:06:02',
                    'updated_at' => '2026-03-06 17:06:02',
                ),
                85 => 
                array (
                    'id' => 87,
                    'edition_id' => 5,
                    'title' => 'Spettacolare',
                    'collaborators' => 'F. Renga, Nek, D. Mancino e D. Faini',
                    'position' => 26,
                    'lyrics' => 'Hai imparato a cadere con stile
Come fanno i campioni di muay thai
Hai ragione a non dire "per sempre"
Tanto "per sempre" non arriva mai
Hai capito che non è il destino
A tirarti fuori da milioni di guai
Ma abbracciami, abbracciami, ché è normale
Stringerti forte è spettacolare
Come l\'amore il primo giorno d\'estate
Come i dischi belli che non scordi più
Come l\'istante che ti cambia per sempre
Ma in fondo resti ancora e ancora tu
E ci saranno le giornate bastarde
Quelle che non ce la fai più
Ma abbracciami, abbracciami, ché è normale
Stringerti forte è spettacolare
C\'è chi cerca soltanto diamanti
O la formula giusta per la felicità
Ma siamo spesso tutti troppo distratti
O troppo convinti per riconoscerla
Tutto il mondo è una gabbia di specchi
Una partita a scacchi con la verità
Ma tu abbracciami, ché è uno spettacolo
Come l\'amore il primo giorno d\'estate
Come i dischi belli che non scordi più
Come l\'istante che ti cambia per sempre
Ma in fondo resti ancora e ancora tu
E ci saranno le giornate bastarde
Quelle che non ce la fai più
Ma abbracciami, abbracciami, ché è normale
Stringerti forte è spettacolare
Ma abbracciami, abbracciami, ché è normale
Stringerti forte è spettacolare
Come l\'amore il primo giorno d\'estate
Come i dischi belli che non scordi più
Come l\'istante che ti cambia per sempre
Ma in fondo resti ancora e ancora tu
E ci saranno le giornate bastarde
Quelle che non ce la fai più
Ma abbracciami, abbracciami, ché è normale
Stringerti forte è spettacolare
Ma abbracciami, abbracciami, ché è normale
Stringerti forte è spettacolare',
                    'created_at' => '2026-03-06 17:06:43',
                    'updated_at' => '2026-03-06 17:06:43',
                ),
                86 => 
                array (
                    'id' => 88,
                    'edition_id' => 5,
                    'title' => 'Autodistruttivo',
                    'collaborators' => 'M. Botticini, E. Fonte, F. E. Clemente, R. Zanotti e M. Paganelli',
                    'position' => 27,
                    'lyrics' => 'E sto nella sad
(Uoh, oh, oh, oh)
(Uoh, oh, oh, oh)
Questa è la storia di un\'altra vita sprecata
Di un figlio triste appena scappato di casa
Lui è cresciuto in fretta dopo un\'infanzia bruciata
Con sua madre che urlava, il padre che lo picchiava
Per loro non ha senso credere nei sogni
Ma lui sa che il suo tempo vale molto più dei soldi
E vive sotto effetto per scappare dai ricordi
Di un angelo sui tacchi col diavolo negli occhi
L\'amore spacca il cuore a metà
Ti lascia in coma dentro il solito bar
Nessuno resta per sempre tranne i tattoo sulla pelle
Prendo qualcosa se qualcosa non va
E vomito anche l\'anima per sentirmi vivo dentro \'sto casino
Affogo in una lacrima perché il mio destino è autodistruttivo
E prendo a pugni lo specchio io non ci riesco a cambiare chi vedo riflesso
Il tuo cuore è di plastica e starti vicino è autodistruttivo
Questa è la storia di un mare di delusioni
E affoghi fino a quando non provi emozioni
Lui ha imparato come si sopravvive là fuori
Molto più dagli errori che dai suoi professori
L\'amore spacca il cuore a metà
Ti lascia in coma dentro il solito bar
Nessuno resta per sempre tranne i tattoo sulla pelle
Prendo qualcosa se qualcosa non va
E vomito anche l\'anima per sentirmi vivo dentro \'sto casino
Affogo in una lacrima perché il mio destino è autodistruttivo
E prendo a pugni lo specchio io non ci riesco a cambiare chi vedo riflesso
Il tuo cuore è di plastica e starti vicino è autodistruttivo
E sono solo uno dei tanti
Col sorriso triste e con gli occhi stanchi
Che non riesce più a fidarsi degli altri
Con una mano mi abbracci e con l\'altra mi ammazzi
E sono stato sempre quello solo
Perché non sono mai stato come loro
Che hanno lo sguardo pieno d\'odio e il cuore vuoto
Il nostro amore maledetto mi mancherà in eterno
E vomito anche l\'anima per sentirmi vivo dentro \'sto casino
Affogo in una lacrima perché il mio destino è autodistruttivo
E prendo a pugni lo specchio io non ci riesco a cambiare chi vedo riflesso
Il tuo cuore è di plastica e starti vicino è autodistruttivo',
                    'created_at' => '2026-03-06 17:07:26',
                    'updated_at' => '2026-03-06 17:07:26',
                ),
                87 => 
                array (
                    'id' => 89,
                    'edition_id' => 5,
                    'title' => 'Governo punk',
                    'collaborators' => 'D. Lombardi, D. Caponi, A. Locci, P. Serafini, M. Vittiglio, J. Ettorre e J. Adamo',
                    'position' => 28,
                    'lyrics' => 'Dammi una città, un governo punk
Sono un Dio che ha una regina da salvare
(Sotto il temporale)
Dammi la metà di un cachet da star
Un\'identità, ma da cui possa scappare
(Fammi vergognare)
Parliamo da soli in una notte di prigione
Con gli occhi spalancati e le labbra di silicone
Dammi un po\' di te, un pezzo dei Blur, un locale da spaccare
(Fammi vergognare)
In giro non c\'è niente di che
In provincia la nebbia è la stessa dal 2003
Scrivo dentro un garage, la mia testa è un collage
Di canzoni e momenti tristi
Ho finito le chance per chiederti se
Mi porti via da me, via da me, via da me
Dai miei incubi e dai miei vizi
C\'è una novità, un governo punk
L\'anno che verrà me ne vado un anno al mare
(Sotto il temporale)
Stamattina io mi lavo i denti col gin
Metto i soliti jeans
Sono un nomade in un attico chic
(Ma non abitavi a Beverly Hills?)
Ti pare?
Parliamo d\'amore in mezzo a una rivoluzione
Ti pettini i capelli con una calibro .9
Metti un altro film, un pezzo dei Queen
Metti che finisce male?
(Ma non ci pensare)
In giro non c\'è niente di che
In provincia la nebbia è la stessa dal 2003
Scrivo dentro un garage, la mia testa è un collage
Di canzoni e momenti tristi
Ho finito le chance per chiederti se
Mi porti via da me, via da me, via da me
Dai miei incubi e dai miei vizi
Governo punk
Questa città sembra una maledizione
Restiamo qua, fermi a guardare
Un tramonto in televisione
Governo punk
Questa città sembra una competizione
Restiamo qua, fermi a guardare La nostra generazione
Scrivo dentro un garage, la mia testa è un collage
Di canzoni e momenti tristi
Ho finito le chance per chiederti se
Mi porti via da me, via da me, via da me
Dai miei incubi e dai miei vizi',
                    'created_at' => '2026-03-06 17:08:04',
                    'updated_at' => '2026-03-06 17:08:04',
                ),
                88 => 
                array (
                    'id' => 90,
                    'edition_id' => 5,
                    'title' => 'Finiscimi',
                    'collaborators' => 'Sangiovanni, P. Miano, F. Campedelli, A. Ferrara e F. Vaccari',
                    'position' => 29,
                    'lyrics' => 'Ti ho scritto mille lettere e non dirti neanche una parola
Le tue io le conservo ancora
Che cosa penserai, chissà cosa farai
Scarabocchi sui miei libri
Mi leggi tra le righe
Non riesco più a gestirmi
Io non so come si controllano le emozioni
Perciò delle volte ho fatto un po\' il coglione
Non abituarti, sono soltanto un bugiardo
Con gli errori commessi ci farò una collezione
Negli occhi vedrò solo le allucinazioni
Tu che non mi ami
E io ancora che ti chiamo per dirti
Finiscimi
Fammi sentire quanto sono pessimo
Quanto ti ho mancato di rispetto, di rispetto
Non dicendoti la verità
Capiscimi
A mia discolpa dico che ero perso
Ho dato comunque tutto me stesso, tutto me stesso
Ancora adesso, ancora adesso
Ho scritto mille inizi per non doverti lasciare sola
Non ti vedevo pronta
Non avevo il coraggio di fare questo passo
E ora che l\'abbiamo fatto
Capisco che ho lasciato con cosa son rimasto
Con \'sta nostalgia del cazzo
Io non so come si controllano le emozioni
Perciò delle volte ho fatto un po\' il coglione
Non abituarti, sono soltanto un bugiardo
Con gli errori commessi ci farò una collezione
Negli occhi vedrò solo le allucinazioni
Tu che non mi ami
E io ancora che ti chiamo per dirti
Finiscimi
Fammi sentire quanto sono pessimo
Quanto ti ho mancato di rispetto, di rispetto
Non dicendoti la verità
Capiscimi
A mia discolpa dico che ero perso
Ho dato comunque tutto me stesso, tutto me stesso
Ancora adesso, ancora adesso
Non basterà se ti chiederò scusa per riaverti con me
(Yeah)
Non basterà se ti scrivo una lettera, questa è l\'ultima
(Yeah)
Capiscimi
A mia discolpa dico che ero perso
Ho dato comunque tutto me stesso, tutto me stesso
Ancora adesso, ancora adesso',
                    'created_at' => '2026-03-06 17:08:35',
                    'updated_at' => '2026-03-06 17:08:35',
                ),
                89 => 
                array (
                    'id' => 91,
                    'edition_id' => 5,
                    'title' => 'Il cielo non ci vuole',
                    'collaborators' => 'F. De Palma, J. Ettorre e J. Boverod',
                    'position' => 30,
                    'lyrics' => 'Mi hai dato un bacio sopra la bocca
Come se fosse stata davvero l’ultima volta
Una storia finisce se non c’è nessuno
Che la racconta
Mi guardi come se il futuro fosse alla porta
E tu fossi fuori a gridare e nessuno ti ascolta
Giurami che anche per te non è destino
Vorrei cancellare ogni frase di quello che scrivo
Lasciarmi cadere nel vuoto per sentirmi vivo
Anche solo per un attimo
Rincorrere ancora quel brivido
Sarà fantastico
Morire ancora per te
Ma tu promettimi che
Staremo bene anche all’inferno
Il cielo non ci vuole
Pieni di rimpianti fino all’overdose
E invece di tenerti lontana da me
Ti ho fatta solo piangere, piangere
Dai non essere triste
Che mi fai stare male
Alla fine il dolore sparisce
Come il sole nel mare
A parte tenerci davvero, cosa ci rimane
Più spazio per essere soli,
Senza mai più essere noi
Giurami che anche per te non è destino
Vorrei cancellare ogni frase di quello che scrivo
Lasciarmi cadere nel vuoto per sentirmi vivo
Anche solo per un attimo
Rincorrere ancora quel brivido
Sarà fantastico
Morire ancora per te
Ma tu promettimi che
Staremo bene anche all’inferno
Il cielo non ci vuole
Pieni di rimpianti fino all’overdose
E invece di tenerti lontana da me
Ti ho fatta solo piangere, piangere
Questo amore è una sparatoria
Con le tue armi puntate verso di me
Sparami adesso sparami ora
Ma tu promettimi che
Staremo bene anche all’inferno
Il cielo non ci vuole
Pieni di rimpianti fino all’overdose
E invece di tenerti lontana da me
Ti ho fatta solo piangere, piangere
Il cielo non ci vuole
Pieni di rimpianti fino all’overdose
E anche se ti ho dato tutto di me
Ti ho fatta solo piangere, piangere',
                    'created_at' => '2026-03-06 17:09:22',
                    'updated_at' => '2026-03-06 17:09:22',
                ),
            ));
        
        
    }
}