<?php include '_inc/init.html' ?>

	<main>
		<div class="container">
            <h1 id="home">CSS (Cascading Style Sheets) Kaskádové štýly - tutorial</h1>
                <h2>Syntax</h2>
                <img src="/img/CSS-syntax.gif" alt="CSS Syntax">

                <p>Syntax zápisu SELECTORov</p>
                <ul>
                    <li>* {declaration} --- * = každý element</li>
                    <li>p {dec.} --- všetky "p" elementy</li>
                    <li>p [atr] {dec.} --- každý "p" element, s atribútom "atr"</li>
                    <li>[atr] {dec.} --- všetky elementy, s atribútom "atr"</li>

                    <li>section p {dec.} --- každý "p" element, ktorý je potomkom section</li>
                    <li>section > p {dec.} --- každý "p" element, ktorý je PRIAMY potomok rodiča section</li>
                    <li>#id {dec.} --- každý element, ktorý má ID id</li>
                    <li>#id p {dec.} --- každý "p" element, ktorý má ID id</li>
                    <li>.class {dec.} --- každý element, ktorý má CLASS class</li>
                    <li>.class p {dec.} --- každý "p" element, ktorý má CLASS class</li>
                </ul>
                <h2>Rozmery</h2> 
                    <p>Formátovanie, rozmery</p>
                    <ol>
                        <li><strong>padding: 5px;</strong> - Výplň - generuje priestor okolo obsahu elementu vo vnútri definovaných hraníc.<br>
                            Možnosti: padding-top, -right, -bottom, -left<br>
                            Hodnoty: px, pt, cm, %, inherit
                        </li>
                        <li><strong>margin: 5px;</strong> - Okraje - generuje priestor okolo elementov mimo definovaných hraníc.<br>
                            Možnosti: margin-top, -right, -bottom, -left<br>
                            Hodnoty: auto, px, pt, cm, %, inherit
                            Negatívne hodnoty sú povolené.
                        </li>
                        <li><strong>border: 5px;</strong> - Hranice - Vlastnosti hraníc umožňujú určiť štýl, šírku a farbu ohraničenia elementu.<br>
                            Možnosti: border-top, -right, -bottom, -left<br>
                            Hodnoty: auto, px, pt, cm, %, inherit
                            Negatívne hodnoty sú povolené.
                        </li>
                    </ol>
                    
                <h2>Pozície elementov</h2> 
                    <p>Pozície: Bez iného zásahu pozície elementov určuje "HTML Work Flow". Tomuto hovoríme Statické pozície.
                    Aby sme tieto statické pozície mohli meniť, pouzívame cez CSS označenie "position:" </p>
                    <p>Position poznáme</p>
                    <ol>
                        <li>absolut: premiestni element na zadanú pozíciu voči rodičovi, ktorý nepatrí do bežného workflowu. (ma relativ)
                            <br> Ak takého rodiča nema, premiestni ho voči celej stránke.</li>
                        <li>relative: posunie element LEN VIZUÁLNE, podstatou zostáva na svojom mieste</li>
                        <li>fixed: Je pozícia k viditelnému obsahu browsera</li>
                    </ol>
                    <p> FLOATom - robíme element BLOCKovým, obtekaným a umiestňujeme ho na zadaný okraj rodiča.<br>
                        syntax: "float: left;" - alebo right, na stred floatovať neviem, traba použiť MARGIN fintu<br>
                        CLEARom rušíme obtekanie. Samozrejme štýlovaním obtekajúceho elementu.<br>
                        syntax: "clear: left;" - alebo konkrétne: rigt, left
                    </p>
                    <p>Použitie CSS "position" a "float" vytrhne predmetný element z HTML Work Flowu. V prípade, že sa nám elemety prekrývajú, na ich zoradenie používame: z-index</p>    
            
                    
                <h2>Text</h2> 
                    <p>Fonty, alebo Text:</p>
                    <ol>
                        <li>font-size: 16px; - výška fontu</li>
                        <li>font-family: Helvetica; - typ fontu</li>
                        <li>-webkit-font-smoothing: antialiased; - vyhladzovanie fontu</li>
                        <li>text-align: center; - centrovanie textu</li>
                        <li>font-weight: bold; - </li>
                    </ol>
        </div>
	</main>

<?php include '_inc/footer.html' ?>      