<?php include '_inc/init.html' ?>

    <main>
        <div class="container"> 
            <h1 id="home">HTML Tutorial, <br> btw toto je H1 nadpis</h1>
            
                <h2>Štruktúra HTML - Hyper Text Markup Language</h2> 
                    <p>Webové stránky sa skladajú z 3 hlavných komponnetov:</p>
                    <ol>
                        <li>Samotný obsah - Text</li>
                        <li>Elementy: t.j. značkovací kód</li>
                        <li>Odkazy na iné súbory. (linky, obrázky, videá)</li>
                        <li>A samozrejme coderove poznámky, všetko medzi comment tagmi &lt!-- --&gt </li>
                    </ol>
                    
                    
            
                <h2>Elementy - stavebný materiál HTML</h2> 
                    <p>Elemety sú stavebné prvky HTML kódu, podľa funkčnosti ich rozdeľujeme:</p>
                    <ol>
                        <li><strong>InLine</strong> elementy - Neštartujú na novom riadku a využívajú iba dopredu vyhradený priestor (pláva na texte), resp. slúži na obaľovanie.<br>Napr.:
                            <ul>
                                <li>&ltem&gt obsah &lt/em&gt</li>
                                <li>&ltstrong&gt obsah &lt/strong&gt</li>
                                <li>&ltb&gt obsah &lt/b&gt</li>
                            </ul>
                        <li><strong>Block-level</strong> elementy - Vždy štartujú na novom riadku a využíva plnú šírku rodičovského elementu.
                            Block-level elementom na rozdiel od InLine môžeme definovať rozmery.
                            <ul>
                                <li>&ltp&gt</li>
                                <li>&lth1&gt</li>
                                <li>&ltbody&gt</li>
                            </ul>
                        </li>
                    
                    </ol>
                    <p>Samozrejme existuje možnosť ako malou fintou nastaviť InLine elementu vlastnosti Block-level elementu.
                        A to cez CSS display: inline-block; Po tomto zadefinovaní nám zobere napr. aj šírku a výšku</p>
                    <ul>
                        <li> <a href="css.html"> CSS štýlovanie </a></li>
                        <li> <a href="http://escapecodes.info/"> Escape Codes</a></li>

                    </ul>  
                <h2>h1 až h6</h2> 

            <h2>Tagy na formátovanie textu - toto je h2 tag, dvojkový pod-nadpis pod h1</h2>
            <p>"p" (paragraph) - Blok textu, alebo odstavec. Tento tag vypisuje text vždy na novom riadku</p>
            <p>"br" (break) Blok textu zlomíme br tagom <br> na nasledujúci riadok. br možeme používať s lomítkom
                <br />za br tagom,
                <br>alebo aj bez :) 
            </p>
            <p>"strong" tagom označujeme, že <strong>tento text má veľkú dôležitosť.</strong> Nejde len o vizuál, ale aj o vlastnosť.</p>
            <p>"b" (bolt) - <b>Tučný štýl</b> písma</p>
            <p>"em" (emphasis) Tento tag dáva <em>prízvuk</em> na text. Podobne ako pri strong, nejde len o vizuál, ale aj o vlastnosť.</p>
            <p>"i" (italic) - Obyčajné <i>Kurzíva</i></p>
            <p>"s" (strike through) - Toto je <s>preškrtnutý</s> text</p>
            <blockquote> <p>"blockquote" - Blok citátu, odsadí nám text z ľavej strany.</p></blockquote>
            <p>"hr" (horizontal rule) - Horizontálna čiara. Ktorá sa používa napr. na oddelenie tématických častí.</p>
            <hr>

            <h2>Zoznamy - toto je znova h2 tag, dvojkový pod-nadpis pod h1</h2>
            
            <p>V HTML sú 3 typy zoznamov:</p>
        
            <ul>
                <li>"ul" unordered list - neusporiadaný zoznam</li>
                <li>"ol" ordered list - usporiadaný zoznam</li>
                <li>"dl" definition, alebo description list - definičný zoznam</li>
            </ul>
            
            <p>Jednotlivé položky zoznamu označujeme tagom "li" (list item).</p>
        
            <ol>
                <li>"li" element sa vyskytuje <B>IBA</B> v zoznamoch!</li>
                <li>"ul" a "ol" zoznam nesmie obsahovať iné elementy <B>IBA</B> element "li"!</li>
                <li>"li" element následne môže obsahovať iné daľšie elementy. <em>Napr. "em"</em></li>
                <li>Dokonca "li" element môže obsahovat aj "ul" alebo "ol" zoznam:
                    <ul>
                        <li>"li" položka</li>
                        <li>dalšia "li" položka</li>
                    </ul>
                </li>
            </ol>
            
            <dl>
                <dt>"dt" description term - termín ktorý ideme termínovať</dt>
                <dd>"dd" definiton - samotná definíciaa</dd>
            </dl>
            <hr>

            <h2>Odkazy, linky, emaily a telefónne čísla</h2>
            <p>Odkazy vytvárame "a" anchor + "href" hypertext reference.<br>
                Príklady na "id"+"#" čo je skok na iné miesto tejto stránky,<br>
                potom "Absolútne" a "Relatívne" adresovanie<br>
                A tiez "mailto:" a "tel:"
            </p>
    
            <p> Skok na "id" home (každý element môže mať svoje "id") <a href="#home"> Home </a> </p>
            <p> Absolútny odkaz - <a href="https://24music.sk/"> 24music </a> </p>
            <p> Absolútny odkaz v novom okne - <a href="https://24music.sk/" target="_blank"> 24music </a> </p>

            <h3> Príklad na bežne používané použitie odkazov v zozname </h3>
            <ul>
                <li> <a href="#home"> Skok na "id" home (každý element môže mať svoje "id") </a></li>
                <li> <a href="test.html"> Relatívna - test.html </a></li>
                <li> <a href="https://24music.sk/"> Absolútna - 24music </a></li>
                <li> <a href="https://24music.sk/" target="_blank"> Absolútna - 24music, v novom okne</a></li>
                <li> <a href="mailto:info@info.sk"> Napíš mi</a></li>
                <li> <a href="tel:0908123456"> Zavolaj mi</a></li>
            </ul>        

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <hr>
            <h2>Obrázky</h2>
                <p> "img src" element </p>
                <img src="img/24music.jpg" height="64" width="200" alt="24music logo">
                <a href="img/24music.jpg" title="Titulok, tento obrazok je s odkazom."> 
                    <img src="img/24music.jpg" height="32" width="100" alt="24music logo">
                </a>
        </div>
    </main>

<?php include '_inc/footer.html' ?>