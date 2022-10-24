<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  display: grid;
  grid-template-rows: 1fr 10rem auto;
  grid-template-areas: "main" "." "footer";
  overflow-x: hidden;
  background: #F5F7FA;
  min-height: 100vh;
  font-family: "Open Sans", sans-serif;
}
body .footer {
  z-index: 1;
  --footer-background:#ED5565;
  display: grid;
  position: relative;
  grid-area: footer;
  min-height: 12rem;
}
body .footer .bubbles {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 1rem;
  background: var(--footer-background);
  filter: url("#blob");
}
body .footer .bubbles .bubble {
  position: absolute;
  left: var(--position, 50%);
  background: var(--footer-background);
  border-radius: 100%;
  -webkit-animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
          animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
  transform: translate(-50%, 100%);
}
body .footer .content {
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr auto;
  grid-gap: 4rem;
  padding: 2rem;
  background: var(--footer-background);
}
body .footer .content a, body .footer .content p {
  color: #F5F7FA;
  text-decoration: none;
}
body .footer .content b {
  color: white;
}
body .footer .content p {
  margin: 0;
  font-size: 0.75rem;
}
body .footer .content > div {
  display: flex;
  flex-direction: column;
  justify-content: center;
}
body .footer .content > div > div {
  margin: 0.25rem 0;
}
body .footer .content > div > div > * {
  margin-right: 0.5rem;
}
body .footer .content > div .image {
  align-self: center;
  width: 4rem;
  height: 4rem;
  margin: 0.25rem 0;
  background-size: cover;
  background-position: center;
}

@-webkit-keyframes bubble-size {
  0%, 75% {
    width: var(--size, 4rem);
    height: var(--size, 4rem);
  }
  100% {
    width: 0rem;
    height: 0rem;
  }
}

@keyframes bubble-size {
  0%, 75% {
    width: var(--size, 4rem);
    height: var(--size, 4rem);
  }
  100% {
    width: 0rem;
    height: 0rem;
  }
}
@-webkit-keyframes bubble-move {
  0% {
    bottom: -4rem;
  }
  100% {
    bottom: var(--distance, 10rem);
  }
}
@keyframes bubble-move {
  0% {
    bottom: -4rem;
  }
  100% {
    bottom: var(--distance, 10rem);
  }
}
    </style>
</head>
<body>
    
<div class="main"></div>
<div class="footer">
  <div class="bubbles">
    <div class="bubble" style="--size:2.407992405618904rem; --distance:8.218984951530462rem; --position:93.13370446388669%; --time:2.6957905771487414s; --delay:-2.818255385213512s;"></div>
    <div class="bubble" style="--size:4.746769246588547rem; --distance:7.543676208213193rem; --position:35.73403314009931%; --time:2.260483535451182s; --delay:-2.599949169263756s;"></div>
    <div class="bubble" style="--size:4.688490751291552rem; --distance:9.779627832104026rem; --position:66.63256978501623%; --time:2.5232699119174593s; --delay:-2.1275949367357896s;"></div>
    <div class="bubble" style="--size:3.223654324188563rem; --distance:9.32781436107768rem; --position:6.976470425979933%; --time:3.8914757345272046s; --delay:-3.313195766713834s;"></div>
    <div class="bubble" style="--size:4.95976920310824rem; --distance:6.990489561330478rem; --position:81.01720474525052%; --time:3.3708315717385897s; --delay:-3.4048971725116535s;"></div>
    <div class="bubble" style="--size:2.4500837333826375rem; --distance:9.169384192288842rem; --position:29.193602320531667%; --time:3.511674229266955s; --delay:-2.8664247691999836s;"></div>
    <div class="bubble" style="--size:3.5711173025552805rem; --distance:6.331360398552796rem; --position:100.87760071559211%; --time:3.306094233399906s; --delay:-2.443626025231422s;"></div>
    <div class="bubble" style="--size:4.69001445884242rem; --distance:6.619796610055219rem; --position:7.878135998254736%; --time:3.6058761997827067s; --delay:-3.518473165258611s;"></div>
    <div class="bubble" style="--size:2.3915086218507957rem; --distance:6.051895067106559rem; --position:79.76414511939178%; --time:3.3531485601753825s; --delay:-2.4537561707095086s;"></div>
    <div class="bubble" style="--size:3.5846228344410074rem; --distance:7.344964521799367rem; --position:92.18508719761797%; --time:3.4079325199473596s; --delay:-2.6687014135607185s;"></div>
    <div class="bubble" style="--size:4.267316074495401rem; --distance:9.560086800452233rem; --position:23.809298444240113%; --time:2.492085842563077s; --delay:-2.772333412588659s;"></div>
    <div class="bubble" style="--size:4.608514299315714rem; --distance:6.875377647902327rem; --position:64.81849146064299%; --time:3.295026123267674s; --delay:-3.375210217873652s;"></div>
    <div class="bubble" style="--size:2.7241312183735333rem; --distance:6.747923227983828rem; --position:66.52249481331297%; --time:3.2116198714072217s; --delay:-3.7599041127869874s;"></div>
    <div class="bubble" style="--size:3.9654808185921553rem; --distance:9.537558791998295rem; --position:56.695798274233155%; --time:2.679642255464649s; --delay:-3.03452929575224s;"></div>
    <div class="bubble" style="--size:4.713572739148428rem; --distance:8.243697460088958rem; --position:20.811211055356942%; --time:2.7601241644097594s; --delay:-3.9934870325409686s;"></div>
    <div class="bubble" style="--size:3.97046369405479rem; --distance:7.169536493597933rem; --position:95.90232794621042%; --time:2.9745728640881404s; --delay:-2.7016608265595137s;"></div>
    <div class="bubble" style="--size:3.2671839976051276rem; --distance:8.642558399283367rem; --position:76.47902368387359%; --time:2.186958793020887s; --delay:-2.98741026602096s;"></div>
    <div class="bubble" style="--size:4.632122401102292rem; --distance:7.981648282649881rem; --position:74.99203522742347%; --time:2.0519880674454263s; --delay:-2.7911259772282144s;"></div>
    <div class="bubble" style="--size:4.516651516699947rem; --distance:7.178561000609226rem; --position:78.9483091446515%; --time:3.9282304038185827s; --delay:-3.0271081244245184s;"></div>
    <div class="bubble" style="--size:3.944289702507474rem; --distance:6.309243643406353rem; --position:62.07300123358405%; --time:3.9292386706346036s; --delay:-2.2270845100019114s;"></div>
    <div class="bubble" style="--size:2.8255581245017627rem; --distance:7.075210774468342rem; --position:67.20171246957663%; --time:2.6443030225373763s; --delay:-2.300227847056964s;"></div>
    <div class="bubble" style="--size:2.0457303355823386rem; --distance:9.389426701561572rem; --position:-2.5255350890217065%; --time:3.9040720896688943s; --delay:-2.6002301524229603s;"></div>
    <div class="bubble" style="--size:4.524115620004258rem; --distance:8.869821717875922rem; --position:5.718401237484175%; --time:2.7669505602162388s; --delay:-2.405028411236321s;"></div>
    <div class="bubble" style="--size:2.2999888710890977rem; --distance:9.75600090720939rem; --position:103.9971439019409%; --time:3.4073123279162614s; --delay:-3.643352892079016s;"></div>
    <div class="bubble" style="--size:2.0647088929522264rem; --distance:8.529308065052366rem; --position:86.80883506656613%; --time:2.1609202333023183s; --delay:-3.5144422062817102s;"></div>
    <div class="bubble" style="--size:2.642098896849167rem; --distance:8.099634376594828rem; --position:-4.438924210443771%; --time:2.7951273647225863s; --delay:-2.407833412970552s;"></div>
    <div class="bubble" style="--size:2.174839665690431rem; --distance:8.23364815482253rem; --position:38.89628504941334%; --time:2.6817774172832807s; --delay:-2.733434539804289s;"></div>
    <div class="bubble" style="--size:5.42389169456524rem; --distance:6.425558518622927rem; --position:68.75983551525938%; --time:2.9624125469874927s; --delay:-3.9805317345123012s;"></div>
    <div class="bubble" style="--size:3.6169948015508853rem; --distance:7.735082607637112rem; --position:28.51599577411161%; --time:3.3915602146484334s; --delay:-2.792646789383308s;"></div>
    <div class="bubble" style="--size:2.029386443164471rem; --distance:8.373212790978902rem; --position:17.420626841431194%; --time:2.703995698901689s; --delay:-3.4816791597652936s;"></div>
    <div class="bubble" style="--size:2.842146311645706rem; --distance:9.804983369588083rem; --position:92.0953592074702%; --time:3.772698149626s; --delay:-3.3107771024512163s;"></div>
    <div class="bubble" style="--size:3.3520207771211457rem; --distance:9.519451172082029rem; --position:82.6418320431921%; --time:3.7267460746799994s; --delay:-3.306151555729588s;"></div>
    <div class="bubble" style="--size:4.883988266305215rem; --distance:9.967072908476917rem; --position:64.34492325842082%; --time:2.8261156577825948s; --delay:-3.752141275072397s;"></div>
    <div class="bubble" style="--size:3.888128729881802rem; --distance:6.082728679947276rem; --position:60.095032563979146%; --time:2.3137595002628846s; --delay:-3.6452625819966307s;"></div>
    <div class="bubble" style="--size:5.0813170662914535rem; --distance:7.034540335810388rem; --position:55.74130111381467%; --time:2.095219794054041s; --delay:-3.2087464591779318s;"></div>
    <div class="bubble" style="--size:2.2652204156695985rem; --distance:9.73356790226469rem; --position:3.0660941305733314%; --time:2.788643025579748s; --delay:-2.552092359041773s;"></div>
    <div class="bubble" style="--size:2.0172782601125663rem; --distance:9.735169248166148rem; --position:41.310964524724675%; --time:2.5420090571677694s; --delay:-2.196546129474166s;"></div>
    <div class="bubble" style="--size:4.764330827878554rem; --distance:6.311080325702677rem; --position:99.48445730788555%; --time:3.8120031423696545s; --delay:-2.899401999871205s;"></div>
    <div class="bubble" style="--size:2.368205792043444rem; --distance:9.992946436653504rem; --position:75.53382466462585%; --time:2.1165371630719867s; --delay:-2.91487497148369s;"></div>
    <div class="bubble" style="--size:5.547711657343136rem; --distance:6.681454534726611rem; --position:45.153921944093426%; --time:2.8009670317478874s; --delay:-3.7569468653738474s;"></div>
    <div class="bubble" style="--size:3.490975391900882rem; --distance:6.695701396162078rem; --position:14.249750481318447%; --time:2.948025100930341s; --delay:-3.2577490707972947s;"></div>
    <div class="bubble" style="--size:5.03251605424054rem; --distance:8.723025226379349rem; --position:100.25726384988165%; --time:2.026975953731515s; --delay:-2.143239712169724s;"></div>
    <div class="bubble" style="--size:4.806345289089184rem; --distance:6.706262374280054rem; --position:96.53738610394531%; --time:2.1898936863991705s; --delay:-2.042099700672007s;"></div>
    <div class="bubble" style="--size:5.963920057963861rem; --distance:7.570811086065512rem; --position:70.36204735725083%; --time:2.0964645815108014s; --delay:-3.0657103465156035s;"></div>
    <div class="bubble" style="--size:4.57412344322039rem; --distance:7.522291805088991rem; --position:75.39998227234442%; --time:3.973254001590607s; --delay:-2.840321104976412s;"></div>
    <div class="bubble" style="--size:2.620360703553299rem; --distance:6.571763710436982rem; --position:57.931523614068205%; --time:2.12105100751958s; --delay:-3.9784997405544127s;"></div>
    <div class="bubble" style="--size:3.8003671196687963rem; --distance:9.595103934524673rem; --position:53.597795087136134%; --time:3.476635652870702s; --delay:-3.739802818673138s;"></div>
    <div class="bubble" style="--size:4.837099950997191rem; --distance:8.991658606258635rem; --position:98.77176022781663%; --time:3.4950396881152552s; --delay:-2.1986893040108266s;"></div>
    <div class="bubble" style="--size:2.2603577200367004rem; --distance:7.770415053771439rem; --position:44.51887584918924%; --time:3.1574434250035615s; --delay:-3.6549234882025243s;"></div>
    <div class="bubble" style="--size:4.195908448618499rem; --distance:9.676491119133207rem; --position:24.938145255486937%; --time:3.668270464457446s; --delay:-3.299985459310349s;"></div>
    <div class="bubble" style="--size:4.1992821678085965rem; --distance:8.367785329328274rem; --position:1.7511223580527773%; --time:3.4190719552409954s; --delay:-3.4405124210206752s;"></div>
    <div class="bubble" style="--size:3.36017053349946rem; --distance:6.953448687523766rem; --position:71.69715798041226%; --time:2.378846108003145s; --delay:-3.838922360334622s;"></div>
    <div class="bubble" style="--size:5.861594759364216rem; --distance:8.712541434679961rem; --position:11.377724833017705%; --time:2.3501495996063784s; --delay:-2.1225679556312573s;"></div>
    <div class="bubble" style="--size:3.3198096586142585rem; --distance:6.093689140344428rem; --position:33.67963850045637%; --time:2.3527718660050088s; --delay:-2.6346493122365917s;"></div>
    <div class="bubble" style="--size:3.5621414778401723rem; --distance:7.501131688859563rem; --position:24.632351465158255%; --time:3.1932429637267488s; --delay:-2.0307864842284897s;"></div>
    <div class="bubble" style="--size:3.008046559636364rem; --distance:8.695065943588318rem; --position:14.681816461181036%; --time:3.0405211491539674s; --delay:-2.5307133002784217s;"></div>
    <div class="bubble" style="--size:4.723764614347103rem; --distance:9.850967458991128rem; --position:79.15228808221482%; --time:2.690929038327812s; --delay:-3.8453661125259195s;"></div>
    <div class="bubble" style="--size:4.699402854835799rem; --distance:9.868142946568465rem; --position:20.161966324788807%; --time:2.915765933892918s; --delay:-2.1292959146238783s;"></div>
    <div class="bubble" style="--size:2.4521238679644703rem; --distance:7.5047723877754215rem; --position:66.69422553530254%; --time:2.5597513925226996s; --delay:-2.806711560340106s;"></div>
    <div class="bubble" style="--size:4.705783631275252rem; --distance:8.077787545653381rem; --position:62.377626636828964%; --time:3.4098948652509558s; --delay:-3.5132107520831477s;"></div>
    <div class="bubble" style="--size:5.030959941887238rem; --distance:6.22354796160109rem; --position:19.891596537965892%; --time:2.819472163242673s; --delay:-3.3669552802522302s;"></div>
    <div class="bubble" style="--size:2.123271826653589rem; --distance:9.09698507037388rem; --position:-4.0763218173106%; --time:3.181264001063112s; --delay:-3.9086302233347863s;"></div>
    <div class="bubble" style="--size:5.928571507478887rem; --distance:6.281321579833342rem; --position:76.0772284142868%; --time:2.5429999634512823s; --delay:-2.5788006066833953s;"></div>
    <div class="bubble" style="--size:5.923834779701636rem; --distance:7.138282764586616rem; --position:60.08941002944546%; --time:2.756275593707943s; --delay:-2.8525249014247684s;"></div>
    <div class="bubble" style="--size:4.0217859981848285rem; --distance:9.64901877557373rem; --position:65.14680952044604%; --time:2.67747810156301s; --delay:-3.705872580110183s;"></div>
    <div class="bubble" style="--size:2.42009286220926rem; --distance:8.904599892647294rem; --position:22.537973949500973%; --time:2.814369233978328s; --delay:-3.278036009277977s;"></div>
    <div class="bubble" style="--size:3.3305733772256065rem; --distance:6.462990245079046rem; --position:50.09269312113115%; --time:2.1402686949678253s; --delay:-2.706309269806155s;"></div>
    <div class="bubble" style="--size:3.46480135272894rem; --distance:7.884535072918047rem; --position:83.4119391519747%; --time:2.078195511698436s; --delay:-3.0653160359809677s;"></div>
    <div class="bubble" style="--size:4.065794956722723rem; --distance:9.272614890907597rem; --position:30.604097040666765%; --time:2.1249078626950877s; --delay:-3.078247270679898s;"></div>
    <div class="bubble" style="--size:2.234850188713195rem; --distance:8.331138164174835rem; --position:74.33581648562772%; --time:2.9257503411986674s; --delay:-3.6367526346487256s;"></div>
    <div class="bubble" style="--size:3.4223756733663526rem; --distance:9.40195289848595rem; --position:46.060060860369866%; --time:3.7753442044598056s; --delay:-3.1084871515940837s;"></div>
    <div class="bubble" style="--size:3.3278609405318083rem; --distance:9.003882454989846rem; --position:38.39750566769931%; --time:3.077995819256045s; --delay:-2.7884155604335494s;"></div>
    <div class="bubble" style="--size:2.652032264825559rem; --distance:6.901857593853686rem; --position:61.183015025144925%; --time:2.509580584734376s; --delay:-3.111849864414494s;"></div>
    <div class="bubble" style="--size:2.5405964515062216rem; --distance:9.524369383748635rem; --position:91.38056816973187%; --time:3.1515373165279517s; --delay:-3.0053088548796323s;"></div>
    <div class="bubble" style="--size:2.245473914763102rem; --distance:6.5759371142216025rem; --position:49.13076844229545%; --time:3.094076831987406s; --delay:-3.168238733401112s;"></div>
    <div class="bubble" style="--size:3.706493595071646rem; --distance:7.417270485392553rem; --position:61.17083489597408%; --time:2.8916734917214195s; --delay:-3.6633194081765863s;"></div>
    <div class="bubble" style="--size:2.6314823901019313rem; --distance:8.755314493282631rem; --position:86.05976493202166%; --time:2.5093067014098214s; --delay:-3.0765824570191227s;"></div>
    <div class="bubble" style="--size:3.8551858631452465rem; --distance:8.986158014125078rem; --position:69.51754490234916%; --time:2.1463012702699493s; --delay:-3.17429594099385s;"></div>
    <div class="bubble" style="--size:3.615206665669512rem; --distance:7.738758395884395rem; --position:68.62307312752083%; --time:3.889991572111353s; --delay:-3.730958587651341s;"></div>
    <div class="bubble" style="--size:2.545710590841095rem; --distance:8.249798984268018rem; --position:67.79414795905068%; --time:2.3041548733427466s; --delay:-2.064960606247109s;"></div>
    <div class="bubble" style="--size:5.990279111767505rem; --distance:6.649761614664859rem; --position:7.865641979467359%; --time:2.077941713495539s; --delay:-2.3711500722318077s;"></div>
    <div class="bubble" style="--size:4.907789521625432rem; --distance:8.99147661575222rem; --position:12.691317679386898%; --time:3.8592776019539463s; --delay:-3.9014242214083277s;"></div>
    <div class="bubble" style="--size:5.580487243334008rem; --distance:7.795418926858539rem; --position:14.466906802434817%; --time:2.7970443308713593s; --delay:-2.50581098716709s;"></div>
    <div class="bubble" style="--size:3.516736640898774rem; --distance:6.94589811032223rem; --position:104.92274638824178%; --time:2.3364689129281433s; --delay:-3.797774362252349s;"></div>
    <div class="bubble" style="--size:3.2481806332818346rem; --distance:8.870406207247518rem; --position:50.1490618689557%; --time:2.4935121618000413s; --delay:-2.0257109964496487s;"></div>
    <div class="bubble" style="--size:5.0027065208223185rem; --distance:6.042670134202652rem; --position:98.57953931955794%; --time:3.4763570570390896s; --delay:-2.7432332214299326s;"></div>
    <div class="bubble" style="--size:3.5517981062573725rem; --distance:8.633565703397043rem; --position:95.49079234752911%; --time:3.5594145122741585s; --delay:-3.424649141839885s;"></div>
    <div class="bubble" style="--size:4.789100056984564rem; --distance:7.207882541403091rem; --position:9.280367589601381%; --time:2.936421181695908s; --delay:-3.7719928512519734s;"></div>
    <div class="bubble" style="--size:4.343303205364801rem; --distance:9.280222726571752rem; --position:-0.5702991885890913%; --time:3.4800666336185313s; --delay:-3.8178628381067674s;"></div>
    <div class="bubble" style="--size:4.57165429235264rem; --distance:7.986338233766589rem; --position:28.921165959571873%; --time:3.876231851034194s; --delay:-2.019522842624248s;"></div>
    <div class="bubble" style="--size:5.664705799638565rem; --distance:7.518471974616719rem; --position:35.08588938150153%; --time:3.374164003414332s; --delay:-2.0827779697388564s;"></div>
    <div class="bubble" style="--size:5.532884154454154rem; --distance:9.332263367023556rem; --position:17.483180917008077%; --time:2.913033386513806s; --delay:-2.5300228626974706s;"></div>
    <div class="bubble" style="--size:3.2180535699953987rem; --distance:6.81894170174796rem; --position:25.899842600403133%; --time:2.9369819205572556s; --delay:-3.52415870415711s;"></div>
    <div class="bubble" style="--size:2.463663893434129rem; --distance:9.640545469285584rem; --position:6.052493071585502%; --time:2.9422341677025656s; --delay:-3.7240127898393953s;"></div>
    <div class="bubble" style="--size:4.732213517502439rem; --distance:6.878477711755491rem; --position:18.40532291082979%; --time:2.2727904735739717s; --delay:-2.520634731476462s;"></div>
    <div class="bubble" style="--size:3.981322822184068rem; --distance:7.002009146447627rem; --position:48.92404067962846%; --time:2.9764843598366366s; --delay:-3.024088027504488s;"></div>
    <div class="bubble" style="--size:3.4893963946532rem; --distance:9.256645702142816rem; --position:10.197279938275317%; --time:2.8354147913488514s; --delay:-3.9501778336119426s;"></div>
    <div class="bubble" style="--size:2.340954077690493rem; --distance:8.19010180310245rem; --position:40.57382164059123%; --time:2.086305362371888s; --delay:-2.6186635924257033s;"></div>
    <div class="bubble" style="--size:4.374993718720934rem; --distance:6.118469177477209rem; --position:80.52330345487445%; --time:2.905696082338125s; --delay:-2.7863616498790122s;"></div>
    <div class="bubble" style="--size:2.3212523530659004rem; --distance:8.771968247949536rem; --position:86.0458410647782%; --time:3.7978173537204762s; --delay:-3.313980011087325s;"></div>
    <div class="bubble" style="--size:3.0294065769955143rem; --distance:9.273013220465476rem; --position:88.0652309609857%; --time:3.387605838894321s; --delay:-2.1981152149978933s;"></div>
    <div class="bubble" style="--size:5.686050063338753rem; --distance:7.197394248225762rem; --position:21.839531164707903%; --time:2.0399633569510307s; --delay:-2.4381296667260473s;"></div>
    <div class="bubble" style="--size:4.124338498310438rem; --distance:8.114636050012644rem; --position:94.07144891205775%; --time:2.7642660141775277s; --delay:-2.826183302806664s;"></div>
    <div class="bubble" style="--size:4.696183511269922rem; --distance:6.220032593900997rem; --position:94.61793896897831%; --time:2.3529734061367304s; --delay:-3.421840889597476s;"></div>
    <div class="bubble" style="--size:5.444414491846469rem; --distance:6.255827176973202rem; --position:7.85884977965938%; --time:2.654557792916921s; --delay:-2.308648207823165s;"></div>
    <div class="bubble" style="--size:3.8754592171096744rem; --distance:6.527824160189991rem; --position:92.32639199031341%; --time:2.124514770428242s; --delay:-3.4347802054536043s;"></div>
    <div class="bubble" style="--size:5.466025064743004rem; --distance:8.461167320538511rem; --position:15.153723665909332%; --time:3.2754566819877575s; --delay:-2.8268921118680876s;"></div>
    <div class="bubble" style="--size:4.977237440870121rem; --distance:8.09479537849154rem; --position:83.96899418610329%; --time:3.669153836300364s; --delay:-3.9388608657912476s;"></div>
    <div class="bubble" style="--size:5.568304437833307rem; --distance:8.306514531246172rem; --position:44.24495724424686%; --time:2.9165791462461446s; --delay:-3.1453601320467603s;"></div>
    <div class="bubble" style="--size:3.9127381399985373rem; --distance:7.917158399269548rem; --position:86.08736166069318%; --time:3.7220138210256972s; --delay:-3.8597447589085254s;"></div>
    <div class="bubble" style="--size:2.156603441364391rem; --distance:8.951054738541217rem; --position:93.4570438960468%; --time:3.285183665794522s; --delay:-2.850006384248189s;"></div>
    <div class="bubble" style="--size:5.807548157662436rem; --distance:8.588550677124767rem; --position:104.82152734535924%; --time:3.7841624602450774s; --delay:-3.8114986383221496s;"></div>
    <div class="bubble" style="--size:3.465325531139733rem; --distance:9.137786602207846rem; --position:76.91931829135495%; --time:3.6987177572186023s; --delay:-2.0274401645093016s;"></div>
    <div class="bubble" style="--size:3.3467910529362817rem; --distance:8.607264495336352rem; --position:54.227198611590055%; --time:3.051365533465825s; --delay:-3.71753450167838s;"></div>
    <div class="bubble" style="--size:5.1787679609537705rem; --distance:8.160420229517507rem; --position:24.849735716814877%; --time:2.9321259786238123s; --delay:-3.9628445590148815s;"></div>
    <div class="bubble" style="--size:4.668791366251033rem; --distance:7.377382296749803rem; --position:55.90718683167873%; --time:3.4437221114781784s; --delay:-3.523919096665329s;"></div>
    <div class="bubble" style="--size:2.605279619754536rem; --distance:6.193270642178286rem; --position:104.88215108839786%; --time:2.8391327938424693s; --delay:-3.6803713943925342s;"></div>
    <div class="bubble" style="--size:3.2408447025190146rem; --distance:9.39994061347885rem; --position:70.97462134171651%; --time:3.169178483016306s; --delay:-2.0208397282881005s;"></div>
    <div class="bubble" style="--size:5.74633763881112rem; --distance:9.563747423679846rem; --position:87.77205760628318%; --time:3.9574164836633647s; --delay:-2.0868730903231225s;"></div>
    <div class="bubble" style="--size:5.211565129633738rem; --distance:8.385702308702887rem; --position:73.45375273647055%; --time:2.5253857197450396s; --delay:-3.9706747621164564s;"></div>
    <div class="bubble" style="--size:3.0687570486195597rem; --distance:9.211112241923308rem; --position:99.08843317238001%; --time:3.5138561711399348s; --delay:-3.028268739950841s;"></div>
    <div class="bubble" style="--size:4.804283114391877rem; --distance:9.75160539334517rem; --position:22.4462692258548%; --time:3.725167053837377s; --delay:-2.4113931280055105s;"></div>
    <div class="bubble" style="--size:3.3370875081191897rem; --distance:8.511505964262252rem; --position:62.378999649863985%; --time:2.18048552741523s; --delay:-3.6546257362917323s;"></div>
    <div class="bubble" style="--size:5.380549007171126rem; --distance:7.409166965167168rem; --position:58.117053166367555%; --time:2.90157740904652s; --delay:-2.0032424646754277s;"></div>
    <div class="bubble" style="--size:4.813785446996312rem; --distance:9.79868425314495rem; --position:41.33527151079218%; --time:3.0396101752764446s; --delay:-2.6142758432711783s;"></div>
    <div class="bubble" style="--size:4.3142525547716rem; --distance:7.284387842862246rem; --position:42.29736713057162%; --time:3.9823724642628773s; --delay:-2.545376977309055s;"></div>
    <div class="bubble" style="--size:3.2851638387713766rem; --distance:9.813062614817976rem; --position:88.69138042849737%; --time:2.002895398401482s; --delay:-2.249621336954135s;"></div>
    <div class="bubble" style="--size:4.4127085316334rem; --distance:7.240648647747036rem; --position:44.245883465704864%; --time:3.4364355896833154s; --delay:-3.6478152495589735s;"></div>
  </div>
  <div class="content">
    <div>
      <div><b>Eldew</b><a href="#">Secuce</a><a href="#">Drupand</a><a href="#">Oceash</a><a href="#">Ugefe</a><a href="#">Babed</a></div>
      <div><b>Spotha</b><a href="#">Miskasa</a><a href="#">Agithe</a><a href="#">Scesha</a><a href="#">Lulle</a></div>
      <div><b>Chashakib</b><a href="#">Chogauw</a><a href="#">Phachuled</a><a href="#">Tiebeft</a><a href="#">Ocid</a><a href="#">Izom</a><a href="#">Ort</a></div>
      <div><b>Athod</b><a href="#">Pamuz</a><a href="#">Vapert</a><a href="#">Neesk</a><a href="#">Omemanen</a></div>
    </div>
    <div><a class="image" href="https://codepen.io/z-" target="_blank" style="background-image: url(&quot;https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/happy.svg&quot;)"></a>
      <p>©2019 Not Really</p>
    </div>
  </div>
</div>
<svg style="position:fixed; top:100vh">
  <defs>
    <filter id="blob">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob"></feColorMatrix>
      <!--feComposite(in="SourceGraphic" in2="blob" operator="atop") //After reviewing this after years I can't remember why I added this but it isn't necessary for the blob effect-->
    </filter>
  </defs>
</svg>
</body>
</html>