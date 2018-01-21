<?php
/* 
Plugin Name: Zitat des Tages 
Plugin URI: http://github.com/getEyes/getEyes-WP-ZdT 
Description: Gibt im Adminbereich jedentag ein neues Zitat aus. 
Version: 1.0 
Author: getEyes 
Author URI: http://3blu.de/ 
License: MIT License 
License URI: http://www.opensource.org/licenses/mit-license.php 
 */ 

/** 
 * Gibt ein Zufälliges Zitat aus. 
 * 
 * @return string 
 */ 
function getEyes_showRandomQuote() {
  # === Zitatedatenbank 
  $a_quote[365]="Die Welt wird nie gut, aber sie könnte besser werden.<br>Carl Zuckmayer (Schriftsteller)";
  $a_quote[364]="Manche Leute drücken nur ein Auge zu, damit sie besser zielen können.<br>Billy Wilder (Filmregisseur)";
  $a_quote[363]="Witz ist Intellekt auf dem Bummel.<br>Oscar Wilde (Schriftsteller)";
  $a_quote[362]="Geld ist jener sechste Sinn, der den Genuß der anderen fünf erst möglich macht.<br>Orson Welles (Schauspieler, Filmregisseur, Drehbuchautor)";
  $a_quote[361]="Freiheit ist ein Gut, daß durch Gebrauchen wächst, durch Nichtgebrauch dahinschwindet.<br>Carl Friedrich von Weizsäcker (Physiker und Philosoph)";
  $a_quote[360]="Für Männer gelten die Gesetze der Optik nicht. Wenn man sie unter die Lupe nimmt, werden sie plötzlich ganz klein.<br>Grethe Weiser (Schauspielerin)";// <!--Copyright 2004 by der onlinemarkt, Peter Blum-->
  $a_quote[359]="Wenn es darauf ankommt, in den Augen einer Frau zu lesen, sind die meisten Männer Analphabeten.<br>Heidelinde Weis (Schauspielerin)";
  $a_quote[358]="Freiheit - hat sie erst einmal Wurzeln geschlagen - ist eine Pflanze, die sehr schnell wächst.<br>George Washington (amerik. Präsident)";
  $a_quote[357]="Die Ästhetik unserer Tage heißt Erfolg.<br>Andy Warhol (Künstler)";
  $a_quote[356]="Jede fragmentarische Lösung ist keine.<br>Lech Walesa";
  $a_quote[355]="Zweifel ist keine angenehme Voraussetzung, aber Gewißheit ist eine absurde.<br>François Marie Voltaire (Schriftsteller und Philosoph)";
  $a_quote[354]="Die Ungleichheit ist die Ursache aller örtlichen Bewegungen.<br>Leonardo da Vinci (Maler, Bildhauer, Architekt, Naturforscher, Ingenieur )";
  $a_quote[353]="Mögen hätte ich schon wollen, aber dürfen hab ich mich nicht getraut.<br>Karl Valentin (Kabarettist und Komiker )";
  $a_quote[352]="Fernsehen ist die Rache des Theaters an der Filmindustrie.<br>Sir Peter Ustinov (Schauspieler, Regisseur, Schriftsteller )";
  $a_quote[351]="Was wären die Menschen ohne die Frauen? Rar, sehr rar.<br>Mark Twain (Schriftsteller)";
  $a_quote[350]="Erfahrungen vererben sich nicht - jeder muß sie allein machen.<br>Kurt Tucholsky (Scirftsteller)";
  $a_quote[349]="Arbeit nennt man heute die Kur, bei der man sich von der Erholung erholt.<br>Georg Thomalla (Schauspieler)";// <!--Copyright 2004 by der onlinemarkt, Peter Blum-->
  $a_quote[348]="Geld fällt nicht vom Himmel. Man muß es sich hier auf Erden verdienen.<br>Margaret Thatcher (Politikerin)";
  $a_quote[347]="Gott hat die Armut nicht erschaffen. Er erschuf nur uns.<br>Mutter Teresa (Ordensschwester)";
  $a_quote[346]="Taucht ein Genie auf, verbrüdern sich die Dummköpfe.<br>Jonathan Swift (Schriftsteller)";
  $a_quote[345]="Heutzutage gilt ein Mann schon als Gentleman, wenn er die Zigarette aus dem Mund nimmt, bevor er eine Frau küßt.<br>Barbra Streisand (Schauspielerin, Sängerin)";
  $a_quote[344]="Moderne Musik ist Instrumentenstimmen nach Noten.<br>Igor Strawinsky (Komponist)";
  $a_quote[343]="Glücklich ist, wer vergißt, was nicht mehr zu ändern ist. (Die Fledermaus)<br>Johann Strauß (Komponist)";
  $a_quote[342]="Frauen haben einen großen Nachteil. Sie halten sich alle für Schauspielerinnen und zeigen nie ihr wahres Gesicht.<br>Rod Stewart (Sänger)";
  $a_quote[341]="In Deutschland kann es keine Revolution geben, weil man dazu den Rasen betreten müßte.<br>Joseph Stalin (Politiker)";
  $a_quote[340]="Nur der ist weise, der weiß, daß er es nicht ist.<br>Sokrates (Philosoph)";
  $a_quote[339]="Wenn sich ein Laster genügend verbreitet hat, wird eine Tugend daraus.<br>Frank Sinatra (Sänger, Schauspieler, Entertainer)";
  $a_quote[338]="An sich ist nichts weder gut noch böse. Erst das Denken mach es dazu.<br>William Shakespeare (Dramatiker)";
  $a_quote[337]="Ein Gentleman ist ein Mann, der eine Frau so lange beschützt, bis er mit ihr allein ist.<br>Peter Sellers (Schauspieler)";
  $a_quote[336]="Wir leben in einem gefährlichen Zeitalter. Der Mensch beherrscht die Natur, bevor er gelernt hat, sich selbst zu beherrschen.<br>Albert Schweitzer (Arzt, Theologe)";
  $a_quote[335]="Frauen begnügen sich nicht mehr mit der Hälfte des Himmels, sie wollen die Hälfte der Welt.<br>Alice Schwarzer (Feministin)";
  $a_quote[334]="Zum Denken sind wenige Menschen geneigt, obwohl alle zum Rechthaben.<br>Arthur Schopenhauer (Philosoph)";
  $a_quote[333]="Wer Kritik übelnimmt, hat etwas zu verbergen.<br>Helmut Schmidt (Politker)";
  $a_quote[332]="Tugend ist zur Energie gewordene Vernunft.<br>Friedrich Schlegel (Dichter)";
  $a_quote[331]="Einfachheit ist das Resultat der Reife.<br>Schiller (Dichter)";
  $a_quote[330]="Eine Diskussion mit dem Regisseur beginnen Schauspieler immer dann, wenn sie den Text nicht kennen.<br>Otto Schenk (Schauspieler, Regisseur)";
  $a_quote[329]="Es kann nicht die Aufgabe eines Politikers sein, die öffentliche Meinung abzuklopfen und dann das Populäre zu tun. Aufgabe des Politikers ist es, das Richtige zu tun und es populär zu machen.<br>Walter Scheel (Politiker)";
  $a_quote[328]="Eine Dame trägt keine Kleider. Sie erlaubt den Kleidern, von ihr getragen zu werden.<br>Yves Saint-Laurent (Mode-Designer)";
  $a_quote[327]="Sorgen ertrinken nicht in Alkohol, sie können schwimmen.<br>Heinz Rühmannn (Schauspieler)";
  $a_quote[326]="Musik ist eine Reflexion der Zeit, in der sie entsteht.<br>Diana Ross (Sängerin)";
  $a_quote[325]="Das Einzige, was wir fürchten müssen, ist die Furcht selbst.<br>Franklin Delano Roosevelt (Politiker)";
  $a_quote[324]="Wäre die deutsche Politik ein Auto, ich fürchte, sie käme schon seit Jahren nicht mehr durch den TÜV.<br>Manfred Rommel (Politiker)";
  $a_quote[323]="Man kann ein Auto nicht wie ein menschliches Wesen behandeln - ein Auto braucht Liebe.<br>Walter Röhrl (Rennfahrer)";
  $a_quote[322]="Sicher ist, daß nichts sicher ist. Selbst das nicht.<br>Joachim Ringelnatz (Schriftsteller, Kabaretist)";
  $a_quote[321]="Eine Regierung löst keine Probleme, sie läßt sie abklingen.<br>Ronald Reagan (amerik. Präsident und Schauspieler)";
  $a_quote[320]="Ich bewundere Frauen, aber sie sind mir nicht ebenbürtig.<br>Anthony Quinn (Schauspieler)";
  $a_quote[319]="Die kürzesten Wörter, nämlich ja und nein erfordern das meiste Nachdenken.<br>Pythagoras (Mathematiker)";
  $a_quote[318]="Ich verstehe nichts von Musik. In meinem Fach ist das nicht nötig.<br>Elvis Presley (Sänger)";
  $a_quote[317]="Beim Film ist Liebe harte Arbeit, da vergeht einem alles.<br>Rudolf Prack (Schauspieler)";
  $a_quote[316]="Nicht in der Erkenntnis liegt das Glück, sondern im Erwerben der Erkenntnis.<br>Edgar Allan Poe (Schriftsteller)";
  $a_quote[315]="Für den gläubigen Menschen steht Gott am Anfang, für den Wissenschaftler am Ende aller seiner Überlegungen.<br>Max Planck (Physiker)";
  $a_quote[314]="Ich würde gern leben wie ein armer Mann mit einem Haufen Geld.<br>Pablo Picasso (Maler)";
  $a_quote[313]="Zweifeln ist Suchen, nicht Ratlosigkeit.<br>Johann Heinrich Pestalozzi (Erzieher)";
  $a_quote[312]="Die besten Bücher sind die, von denen jeder Leser meint, er hätte sie selbst machen können.<br>Blaise Pascal (Mathematiker, Physiker)";
  $a_quote[311]="Die Bürokraten sind die Militaristen des Papierkriegs.<br>Cyril Northcote Parkinson (Historiker)";
  $a_quote[310]="Der Mensch ist ein Wesen, das zur Unzufriedenheit geschaffen wurde.<br>Lilli Palmer (Schauspielerin)";
  $a_quote[309]="Die Zeit vergeht nicht schneller als früher, aber wir laufen eiliger an ihr vorbei.<br>George Orwell";
  $a_quote[308]="Nicht durch Zorn, sondern durch Lachen tötet man.<br>Friedrich Nietzsche (Philosoph)";
  $a_quote[307]="Es gibt nur etwas, was teurer ist als eine Frau - nämlich eine Ex-Frau.<br>Jack Nicholson (Schauspieler)";
  $a_quote[306]="Was wir wissen, ist ein Tropfen; was wir nicht wissen, ein Ozean.<br>Isaac Newton (Mathematiker, Physiker)";
  $a_quote[305]="Es ist der Erfolg, der die großen Männer macht.<br>Napoleon I. Bonaparte (General, Kaiser)";
  $a_quote[304]="Die Menschen verlieren zuerst ihre Illusionen, dann ihre Zähne und ganz zuletzt ihre Laster.<br>Hans Moser (Schauspieler)";
  $a_quote[303]="Schön ist eigentlich alles, was man mit Liebe betrachtet.<br>Christian Morgenstern (Schriftsteller)";
  $a_quote[302]="Ich gebe ungern Interviews, weil ich immer Schwierigkeiten habe, mich an die Lügen zu erinnern, die ich beim letzten Mal erzählt habe.<br>Roger Moore (Schauspieler)";
  $a_quote[301]="Ein Sexsymbol ist ein Ding, und ich hasse es, ein Ding zu sein.<br>Marylin Monroe (Schauspielerin)";
  $a_quote[300]="Man kann keine Einheit erzielen, wenn man sich gegenseitig auf die Füße tritt.<br>François Mitterand (Politiker)";
  $a_quote[299]="Hinter jeder Frau im Nerz steht eine andere, die darüber witzelt, wo sie ihn her hat.<br>Inge Meysel (Schauspielerin)";
  $a_quote[298]="Eine Frau, die ihren Widerstand aufgibt, geht zum Angriff über.<br>Marcello Mastroianni (Schauspieler)";
  $a_quote[297]="In Manufaktur und Handwerk bedient sich der Arbeiter des Werkzeugs, in der Fabrik dient er der Maschine.<br>Karl Marx (Politiker)";
  $a_quote[296]="Mir imponieren nur die Ratschläge und Grundsätze, die der Ratgebende selbst beherzigt.<br>Rosa Luxemburg (Politikerin)";
  $a_quote[295]="Die Lüge ist wie ein Schneeball: Je länger man sie fortwälzt, je größer wird sie.<br>Martin Luther (Kirchenreformator)";
  $a_quote[294]="Jeder Säugling sollte sich so früh und so gründlich wie möglich mit einem Fernsehgerät beschäftigen, denn später hat er ja auch nichts anderes.<br>Loriot (Komiker, Schriftsteller)";
  $a_quote[293]="Fehler gehören zu den Verpflichtungen, mit denen man für ein vollwertiges Leben bezahlt.<br>Sophia Loren (Schauspielerin)";
  $a_quote[292]="Das Genie ist die Macht, Gott der menschlichen Seele zu offenbaren.<br>Franz von Liszt (Komponist)";
  $a_quote[291]="Besser schweigen und als Narr scheinen, als sprechen und jeden Zweifel beseitigen.<br>Abraham Lincoln (Politiker)";
  $a_quote[290]="Feiglinge sind Leute, die mit den Füßen denken.<br>Jerry Lewis (Komiker, Schauspieler)";
  $a_quote[289]="Bester Beweis einer guten Erziehung ist die Pünktlichkeit.<br>Gotthold Ephraim Lessing (Schriftsteller)";
  $a_quote[288]="Sage mir, wer dich lobt, und ich sage dir, worin dein Fehler besteht.<br>Wladimir Iljitsch Lenin (Politiker)";
  $a_quote[287]="Diktatur ist ein Staat, in dem das Halten von Papageien lebensgefährlich sein kann.<br>Jack Lemmon (Schauspieler)";
  $a_quote[286]="Kein Mensch ist so beschäftigt, daß er nicht die Zeit hat, überall zu erzählen, wie beschäftigt er ist.<br>Robert Lembke (Journalist, Moderator)";
  $a_quote[285]="Die Gerechtigkeit ist nichts anderes als die Nächstenliebe des Weisen.<br>Gottfried Wilhelm von Leibniz (Mathematiker)";
  $a_quote[284]="Mode ist die Nachahmung derer, die sich unterscheiden wollen, von denen, die sich nicht unterscheiden.<br>Karl Lagerfeld (Mode-Designer)";
  $a_quote[283]="Frauen müssen das letzte Wort behalten - aber leider nicht für sich.<br>Hans Joachim Kulenkampff (Schauspieler, Moderator)";
  $a_quote[282]="Das Entscheidende am Wissen ist, daß man es beherzigt und anwendet.<br>Konfuzius (Philosoph)";
  $a_quote[281]="Politik wird immer noch mit dem Kopf und nicht mit dem Kehlkopf gemacht.<br>Helmut Kohl (Politiker)";
  $a_quote[280]="Morgen nennt man den Tag, an dem die meisten Fastenkuren beginnen.<br>Gustav Knuth (Schauspieler)";
  $a_quote[279]="Ich habe ein einfaches Rezept, um fit zu bleiben - Ich laufe jeden Tag Amok.<br>Hildegard Knef (Schauspielerin)";
  $a_quote[278]="Ein frei denkender Mensch bleibt nicht da stehen, wo der Zufall ihn hinstößt.<br>Heinrich von Kleist (Schriftsteller)";
  $a_quote[277]="Macht ist das stärkste Aphrodisiakum.<br>Henry Kissinger (Politiker)";
  $a_quote[276]="Ein Satiriker ist jemand, der den Elefanten Mausefallen stellt.<br>Ephraim Kishon (Schriftsteller)";
  $a_quote[275]="Unsere Generation wird nicht so sehr die Untaten böser Menschen zu beklagen haben als vielmehr das erschreckende Schweigen der guten.<br>Martin Luther King (Pastor)";
  $a_quote[274]="Wenn man genug Geld hat, stellt sich der gute Ruf ganz von selbst ein.<br>Erich Kästner (Schriftsteller)";
  $a_quote[273]="Faulheit: der Hang zur Ruhe ohne vorhergehende Arbeit.<br>Immanuel Kant (Philosoph)";
  $a_quote[272]="Nichtstun ist eine der größten und verhältnismäßig leicht zu beseitigenden Dummheiten.<br>Franz Kafka (Schriftsteller)";
  $a_quote[271]="Es kommt nicht darauf an, wie alt man wird, sondern wie man alt wird.<br>Heidi Kabel (Schauspielerin)";
  $a_quote[270]="Es ist durchaus möglich, zuviel zu besitzen: Mit einer Uhr weiß man, wie spät es ist - mit zweien ist man nie sicher.<br>Bob Hope (Komiker)";
  $a_quote[269]="Was uns am Leben erhält, kann uns auch krank machen.<br>Hippokrates (Arzt)";
  $a_quote[268]="Ein Blick in die Welt beweist, daß Horror nichts anderes ist als Realität.<br>Alfred Hitchcock (Regisseur)";
  $a_quote[267]="Computer sind Genieprothesen.<br>Dieter Hildebrandt (Kabarettist)";
  $a_quote[266]="Der einzige Mist, auf dem nichts wächst, ist der Pessimist.<br>Theodor Heuss (Politiker)";
  $a_quote[265]="Die Praxis sollte das Ergebnis des Nachdenkens sein, nicht umgekehrt.<br>Hermann Hesse (Schriftsteller)";
  $a_quote[264]="Durchschnittliche Frauen wissen mehr über die Männer als Schönheiten.<br>Katharine Hepburn (Schauspielerin)";
  $a_quote[263]="Wenn man im Mittelpunkt einer Party stehen will, darf man nicht hingehen.<br>Audrey Hepburn (Schauspielerin)";
  $a_quote[262]="Glück, das ist einfach eine gute Gesundheit und ein schlechtes Gedächtnis.<br>Ernest Hemingway (Schriftsteller)";
  $a_quote[261]="Wer auf andere mit dem ausgestreckten Zeigefinger zeigt, der deutet mit drei Fingern seiner Hand auf sich selbst.<br>Gustav Heinemann (Poltiker)";
  $a_quote[260]="Weise erdenken neue Gedanken, und Narren verbreiten sie.<br>Heinrich Heine (Dichter)";
  $a_quote[259]="Im Grunde bewegen nur zwei Fragen die Menschheit: Wie hat alles angefangen und wie wird alles enden?<br>Stephen Hawking";
  $a_quote[258]="Manche Politiker muß man behandeln wie rohe Eier. Und wie behandelt man rohe Eier? Man haut sie in die Pfanne.<br>Dieter Hallervorden (Schauspieler, Komiker, Kabarettist)";
  $a_quote[257]="beschleunigt die Genesung so sehr wie regelmäßige Arztrechnungen<br>Sir Alec Guiness (Schauspieler)";
  $a_quote[256]="Der einzige, der einen Ozelotpelz wirklich braucht, ist der Ozelot.<br>Bernhard Grzimek (Zoologe)";
  $a_quote[255]="Das Große kommt nicht allein durch Impuls zustande, sondern ist eine Aneinanderkettung kleiner Dinge, die zu einem Ganzen vereint worden sind.<br>Vincent van Gogh (Maler)";
  $a_quote[254]="Irrend lernt man.<br>Johann Wolfgang von Goethe (Dichter)";
  $a_quote[253]="Sex-Appeal ist das, was Männer nur mit den Händen beschreiben können.<br>Uschi Glas (Schauspielerin)";
  $a_quote[252]="Der Schwache kann nicht verzeihen. Verzeihen ist eine Eigenschaft des Starken.<br>Mahatma Gandhi (Politiker)";
  $a_quote[251]="Wer die Geometrie begreift, vermag in dieser Welt alles zu verstehen.<br>Galileo Galilei (Mathematiker)";
  $a_quote[250]="Ein Mann mit einem hohen Bankkonto kann gar nicht häßlich sein.<br>Zsa Zsa Gabor (Schauspielerin)";
  $a_quote[249]="Ein Kuß ist Mund-zu-Mund-Beatmung ohne medizinischen Anlaß.<br>Joachim Fuchsberger (Schauspieler, Moderator)";
  $a_quote[248]="Man ist niemals zu schwer für seine Größe, aber man ist oft zu klein für sein Gewicht.<br>Gert Fröbe (Schauspieler)";
  $a_quote[247]="Wenige Menschen denken, und doch wollen alle entscheiden.<br>Friedrich II. der Große (Monarch)";
  $a_quote[246]="Gegen Angriffe kann man sich wehren, gegen Lob ist man machtlos.<br>Sigmund Freud (Azrt, Psychologe)";
  $a_quote[245]="Wenn eine Frau dem Mann reinen Wein einschenkt, dass ist es bestimmt eine Spätlese.<br>Peter Frankenfeld (Entertainer)";
  $a_quote[244]="Nicht mit Erfindungen, sondern mit Verbesserungen macht man Vermögen.<br>Henry Ford (Unternehmer)";
  $a_quote[243]="Das menschlichste, was wir haben, ist doch die Sprache.<br>Theodor Fontane (Schriftsteller)";
  $a_quote[242]="Meines Wissens ist Geschäftstüchtigkeit kein sekundäres männliches Geschlechtsmerkmal.<br>Jane Fonda (Schriftstellerin)";
  $a_quote[241]="Geld allein macht nicht unglücklich.<br>Peter Falk (Schauspieler)";
  $a_quote[240]="Ein Kompromiß, das ist die Kunst, einen Kuchen so zu teilen, daß jeder meint, er habe das größte Stück bekommen.<br>Ludwig Erhard (Politiker)";
  $a_quote[239]="Mikrofone sind das einzige, das sich Politiker gerne vorhalten lassen.<br>Frank Elstner (Showmaster, Moderator)";
  $a_quote[238]="Ideologen sind Leute, die glauben, daß die Menschheit besser sei als der Mensch.<br>Dwight David Eisenhower (amerik. Präsident)";
  $a_quote[237]="Das, wobei unsere Berechnungen versagen, nennen wir Zufall.<br>Albert Einstein (Physiker)";
  $a_quote[236]="Erfahrung nennt man die Summe aller unserer Irrtümer.<br>Thomas Alva Edison (Erfinder)";
  $a_quote[235]="Facelifting? Nein, dann würde ich ja alle diese großartigen Falten zerstören.<br>Clint Eastwood (Schauspieler)";
  $a_quote[234]="Ideologie ist Ordnung auf Kosten des Weiterdenkens.<br>Friedrich Dürrenmatt (Dramatiker)";
  $a_quote[233]="Ich mag nicht in den Himmel, wenn es da keine Weiber gibt. Was soll ich mit bloßen Flügelköpfchen?<br>Albrecht Dürer (Maler)";
  $a_quote[232]="Mädchen von heute ziehen Hosen an, um wie Jungens auszusehen, und durchsichtige Blusen, um zu beweisen, daß sie keine sind.<br>Heinz Drache (Schauspieler)";
  $a_quote[231]="Der Kriminalschriftsteller ist eine Spinne, die die Fliege bereits hat, bevor sie das Netz um sie herum webt.<br>Sir Arthur Conan Doyle (Schriftsteller)";
  $a_quote[230]="Wenn Frauen sich schön anziehen, sind sie wahrscheinlich der Ansicht, die Männer hielten sie unbekleidet für genauso reizvoll.<br>Christian Dior (Mode-Designer)";
  $a_quote[229]="Fast jede Frau wäre gern treu. Schwierig ist es bloß, den Mann zu finden, dem man treu sein kann.<br>Marlene Dietrich (Schauspielerin, Sängerin)";
  $a_quote[228]="Nichts in der Welt ist so ansteckend wie Gelächter und gute Laune.<br>Charles Dickens (Schriftsteller)";
  $a_quote[227]="Die Frauen machen sich nur deshalb so hübsch, weil das Auge des Mannes besser entwickelt ist, als sein Verstand.<br>Doris Day (Schauspielerin)";
  $a_quote[226]="Ohne Spekulation gibt es keine neue Beobachtung.<br>Charles Darwin (Naturforscher)";
  $a_quote[225]="Wer interessieren will, muß provozieren.<br>Salvador Dali (Maler, Bildhauer, Graphiker)";
  $a_quote[224]="Die meisten Menschen denken darüber nach, was die anderen Menschen über sie denken.<br>Sean Connery (Schauspieler)";
  $a_quote[223]="Was uns zu einem Mann hinzieht, bindet uns selten an ihn.<br>Joan Collins (Schauspielerin)";
  $a_quote[222]="Wir sollten niemals aus den Augen verlieren, daß der Weg zur Tyrannei mit der Zerstörung der Wahrheit beginnt.<br>Bill Clinton (amerik. Präsident)";
  $a_quote[221]="Ein Snob ist jemand, für den der Hummer nur die Vorspeise zu einer Pellkartoffel ist.<br>Hans Clarin (Schauspieler)";
  $a_quote[220]="Ein Archäologe ist der beste Ehemann, den eine Frau haben kann; je älter sie wird, um so mehr interessiert er sich für sie.<br>Agatha Christie (Schriftstellerin)";
  $a_quote[219]="Es ist die Aufgabe der Opposition, die Regierung abzuschminken, während die Vorstellung noch läuft.<br>Jacques Chirac (Politiker)";
  $a_quote[218]="Jeder Tag, an dem du nicht lächelst, ist ein verlorener Tag.<br>Charlie Chaplin (Schauspieler, Regisseur, Produzent )";
  $a_quote[217]="Ein Mann kann anziehen, was er will - er bleibt doch nur ein Accessoire der Frau.<br>Coco Chanel (Mode-Designerin)";
  $a_quote[216]="Die Tochter des Neides ist die Verleumdung.<br>Giacomo Casanova (Schriftsteller)";
  $a_quote[215]="Witze kann man nur dann aus dem Ärmel schütteln, wenn man sie vorher hineingesteckt hat.<br>Rudi Carrell (Showmaster)";
  $a_quote[214]="Ein jeder Wunsch, wenn er erfüllt wird, kriegt augenblicklich Junge<br>Wilhelm Busch (Dichter, Maler, Zeichner)";
  $a_quote[213]="Wer A sagt, der muß nicht B sagen. Er kann auch erkennen, daß A falsch war.<br>Bertold Brecht (Schriftsteller)";
  $a_quote[212]="Niederlagen stählen, aber eben nur, wenn es nicht zu viele werden.<br>Willy Brandt (Politiker)";
  $a_quote[211]="Orden sind mir wurscht, aber haben will ich sie.<br>Johannes Brahms (Komponist)";
  $a_quote[210]="Ein Soldat, der anfängt zu denken, ist schon fast keiner mehr.<br>Heinrich Böll (Schriftsteller)";
  $a_quote[209]="Ein kluger Mann widerspricht nie einer Frau. Er wartet, bis sie es selbst tut.<br>Humphrey Bogart (Schauspieler)";
  $a_quote[208]="Bei schlechten Beamten helfen selbst die besten Gesetze nichts.<br>Otto Fürst von Bismarck (Staatsmann)";
  $a_quote[207]="Mode ist die bereitwillige Bejahung der rätselhaften Tatsache, daß heute etwas schön ist, was gestern häßlich gewesen ist und was morgen unerträglich sein wird.<br>Senta Berger (Schauspielerin)";
  $a_quote[206]="Erotik setzt sich zusammen aus Charisma, Stärke, Erfahrung, Verweigerung.<br>Iris Berben (Schauspielerin, Komödiantin)";
  $a_quote[205]="Der ideale Ehemann ist ein unbestätigtes Gerücht.<br>Brigitte Bardot";
  $a_quote[204]="Frauen haben heute sicher mehr Rechte. Aber mehr Macht hatten sie früher<br>Charles Aznavour (Schauspieler)";
  $a_quote[203]="Dies ist ein kleiner Schritt für einen Menschen, aber ein Riesenschritt für die Menschheit.<br>Neil Armstrong (Astronaut)";
  $a_quote[202]="Tue nie etwas halb, sonst verlierst du mehr, als du je wieder einholen kannst.<br>Louis Armstrong (Musiker)";
  $a_quote[201]="Was es alles gibt, was ich nicht brauche!<br>Aristoteles (Philosoph)";
  $a_quote[200]="Die Folianten vergilben, der Städte gelehrter Glanz erbleicht, aber das Buch der Natur erhält jedes Jahr eine neue Auflage.<br>Hans Christian Andersen (Dichter)";
  $a_quote[199]="Der Mensch lebt nicht vom Brot allein. Nach einer Weile braucht er einen Drink.<br>Woody Allen (Schauspieler, Regisseur)";
  $a_quote[198]="In der Politik geht es nicht darum, recht zu haben, sondern recht zu behalten.<br>Konrad Adenauer (Politiker)";
  $a_quote[197]="Wenn man keine Ahnung hat, einfach Klappe halten<br>Dieter Nuhr (Kommödiant)";
  $a_quote[196]="Ich finde es bemerkenswert, wie England in keinster Weise Südkalifornien ähnelt<br>Austin Powers";
  $a_quote[195]="Glaubt nicht dem Hörensagen und heiligen Überlieferungen, nicht Vermutungen oder eingewurzelten Anschauungen, auch nicht den Worten eines verehrten Meisters; sondern was ihr selbst gründlich geprüft und als euch selbst und anderen zum Wohle dienend erkannt habt, das nehmt an<br>Budda";
  $a_quote[194]="Das richtige Lachen ist der Beginn des richtigen Denkens und Empfindens.<br>Carl Zuckmayer (Schriftsteller)";
  $a_quote[193]="Man umgebe mich mit Luxus. Auf das Notwendige kann ich verzichten.<br>Oscar Wilde (Schriftsteller)";
  $a_quote[192]="Luxus ist immer das, was man möchte aber nicht braucht. Hat man es erst, ist es kein Luxus mehr.<br>Urheber unbekannt";
  $a_quote[191]="Fernsehen ist Kaugummi für die Augen.<br>Orson Welles (Schauspieler, Filmregisseur)";
  $a_quote[190]="VENI VIDI VICI  - ich kam sah und siegte<br>Julius Cäsar";
  $a_quote[189]="Ich bin schwul und das ist auch gut so<br>Klaus Wowereit (Politiker)";
  $a_quote[188]="Regierung ist nicht Vernunft, nicht Beredsamkeit - sondern Gewalt.<br>George Washington (amerik. Präsident)";
  $a_quote[187]="Der Mensch ist nicht frei, wenn er einen leeren Geldbeutel hat.<br>Lech Walesa";
  $a_quote[186]="Wer das Leben nicht schätzt, der verdient es nicht.<br>Leonardo da Vinci (Maler, Bildhauer, Architekt)";
  $a_quote[185]="Man soll die Dinge nicht so tragisch nehmen, wie sie sind.<br>Karl Valentin (Kabarettist, Komiker )";
  $a_quote[184]="Ordnung ist, wenn man etwas findet,ohne es zuvor gesucht zu haben.<br>Urheber unbekannt";
  $a_quote[183]="Viele kleine Leute, an vielen kleinen Orten, die viele kleine Dinge tun, werden das Antlitz dieser Erde verändern.<br>Afrikanische Weisheit";
  $a_quote[182]="Wenn Gott gewollt hätte, dass Menschen mit Bögen schießen, hätte er nicht die Atombombe erfunden.<br>Kelly Bundy";
  $a_quote[181]="Die Kirche sagt, Du sollst Deinen Nachbarn lieben.Ich bin überzeugt, daß sie meinen Nachbarn nicht kennt<br>Sir Peter Ustinov (Schauspieler, Regisseur, Schriftsteller)";
  $a_quote[180]="Schlagfertigkeit ist etwas, worauf man erst 24 Stunden später kommt.<br>Mark Twain (Schriftsteller)";
  $a_quote[179]="Kluge Leute können sich dumm stellen. Das Gegenteil ist schwieriger.<br>Kurt Tucholsky (Schriftsteller)";
  $a_quote[178]="Es ist nicht Sache des Politikers, allen zu gefallen.<br>Margaret Thatcher (Politikerin)";
  $a_quote[177]="Mein Bankier ist der liebe Gott.<br>Mutter Teresa (Ordensschwester)";
  $a_quote[176]="Was Männer und Frauen im Himmel tun, wissen wir nicht. Sicher ist nur, daß sie nicht heiraten.<br>Jonathan Swift (Schriftsteller)";
  $a_quote[175]="Die Kinder von heute sind Tyrannen. Sie widersprechen ihren Eltern, kleckern mit dem Essen und ärgern ihre Lehrer.<br>Sokrates (Philosoph)";
  $a_quote[174]="Sein oder nicht sein, das ist hier die Frage. (aus Hamlet)<br>William Shakespeare (Dramatiker)";
  $a_quote[173]="Zukunftsforschung ist die Kunst, sich zu kratzen, bevor es einen juckt.<br>Peter Sellers (Schauspieler)";
  $a_quote[172]="Es ist besser, hohe Grundsätze zu haben, die man befolgt, als noch höhere, die man außer acht läßt.<br>Albert Schweitzer (Arzt, Theologe)";
  $a_quote[171]="Die Schuhfabrikanten machen Frauenschuhe zum Stehenbleiben. Dabei brauchen wir eher Schuhe zum Davonlaufen.<br>Alice Schwarzer (Feministin)";
  $a_quote[170]="Die Freunde nennen sich aufrichtig, die Feinde sind es.<br>Arthur Schopenhauer (Philosoph)";
  $a_quote[169]="Die Toleranz ist nicht grenzenlos. Sie findet ihre Grenze, vielleicht ihre einzige Grenze, in der etwaigen Intoleranz des anderen.<br>Helmut Schmidt (Politiker)";
  $a_quote[168]="Tugend ist zur Energie gewordene Vernunft.<br>Friedrich Schlegel (Dichter)";
  $a_quote[167]="Die schönsten Träume von Freiheit werden im Kerker geträumt.<br>Schiller (Dichter)";
  $a_quote[166]="Ich habe zum Begriff Herrschaft in der Demokratie ein völlig ungebrochenes Verhältnis, weil es eine Herrschaft auf Zeit ist.<br>Walter Scheel (Politiker)";
  $a_quote[165]="Die Zeit ist zu kostbar, um sie mit falschen Dingen zu verschwenden.<br>Heinz Rühmann (Schauspieler)";
  $a_quote[164]="Ein Politiker wird nicht dadurch zum Experten, daß er etwas über etwas sagt.<br>Manfred Rommel (Politiker)";
  $a_quote[163]="Paßbilder sind die Rache der Photographen.<br>Joachim Ringelnatz (Schriftsteller)";
  $a_quote[162]="Man soll schweigen oder Dinge sagen, die noch besser sind als das Schweigen.<br>Pythagoras  (Mathematiker)";
  $a_quote[161]="Die Wahrheit triumphiert nie, ihre Gegner sterben nur aus.<br>Max Planck (Physiker)";
  $a_quote[160]="Man braucht sehr lange, um jung zu werden.<br>Pablo Picasso (Maler)";
  $a_quote[159]="Ich habe fertig<br>Giovani Trapatoni (Fussballtrainer)";
  $a_quote[158]="Es ist vollbracht!<br>Letzte Worte Jesus Christus";
  $a_quote[157]="Wiederholung ist die Mutter des Lernens.<br>Römisches Sprichwort";
  $a_quote[156]="Entschlossenheit im Unglück ist immer der halbe Weg zur Rettung.<br>Johann Heinrich Pestalozzi (Erzieher)";
  $a_quote[155]="Ein Tropfen Liebe ist mehr als ein Ozean Verstand.<br>Blaise Pascal (Mathematiker, Physiker)";
  $a_quote[154]="Computer sind die neueste technische Errungenschaft zur wirksamen Verzögerung der Büroarbeit.<br>Cyril Northcote Parkinson (Historiker)";
  $a_quote[153]="Der Mensch ist ein Wesen, das zur Unzufriedenheit geschaffen wurde.<br>Lilli Palmer (Schauspielerin)";
  $a_quote[152]="Alle Vorurteile kommen aus den Eingeweiden.<br>Friedrich Nietzsche (Philosoph)";
  $a_quote[151]="Wer lächelt, statt zu toben, ist immer der Stärkere.<br>Japanische Weisheit";
  $a_quote[150]="Abseits ist, wenn der Schiedsrichter pfeift.<br>Franz Beckenbauer (Fussballer)";
  $a_quote[149]="Ich sagte nie: Ich will alleine sein. Ich sagte nur: Ich will alleine gelassen werden. Das ist ein Unterschied.<br>Greta Garbo (Filmdiva)";
  $a_quote[148]="Ich wünschte mir, die Bundesregierung hätte die Moral einer Telefonzelle. In der zahlt man nämlich zuerst und wählt dann. <br>Oskar Lafontaine (Politiker)";
  $a_quote[147]="Wenn ich weiter als andere gesehen habe, dann nur deshalb, weil ich auf der Schulter von Giganten stand.<br>Isaac Newton (Mathematiker, Physiker)";
  $a_quote[146]="Es gibt Diebe, die von den Gesetzen nicht bestraft werden und doch dem Menschen das Kostbarste stehlen: die Zeit<br>Napoleon I. Bonaparte (General, Kaiser)";
  $a_quote[145]="Leben ist die Suche des Nichts nach dem Etwas.<br>Christian Morgenstern (Schriftsteller)";
  $a_quote[144]="Karriere ist etwas Herrliches, aber man kann sich nicht in einer kalten Nacht an ihr wärmen.<br>Marylin Monroe (Schauspielerin)";
  $a_quote[143]="Ein Flirt ohne tiefere Absicht ist ungefähr so sinnvoll wie ein Fahrplan ohne Eisenbahn.<br>Marcello Mastroianni (Schauspieler)";
  $a_quote[142]="So gut, wie jeder schreiben und lesen lernt, muß jeder schreiben und lesen dürfen.<br>Karl Marx (Politiker)";
  $a_quote[141]="Die Arbeit, die tüchtige, intensive Arbeit, die einen ganz in Anspuch nimmt mit Hirn und Nerven, ist doch der größte Genuß im Leben.<br>Rosa Luxemburg (Politikerin)";
  $a_quote[140]="Ihr könnt predigen, über was ihr wollt, aber predigt niemals über vierzig Minuten.<br>Martin Luther (Kirchenreformator)";
  $a_quote[139]="Die Welt hat nie eine gute Definition für das Wort Freiheit gefunden.<br>Abraham Lincoln (Politiker)";
  $a_quote[138]="Milliardäre sind Leute, die auch einmal als ganz gewöhnliche Millionäre angefangen haben.<br>Jerry Lewis (Schauspieler, Komödiant)";
  $a_quote[137]="Die Menschen sind nicht immer, was sie scheinen, aber selten etwas besseres.<br>Gotthold Ephraim Lessing (Schriftsteller)";
  $a_quote[136]="Es ist eine alte Wahrheit, daß man in der Politik oft vom Feinde lernen muß.<br>Wladimir Iljitsch Lenin (Politiker)";
  $a_quote[135]="Fahre wie der Teufel, und du wirst ihn bald treffen.<br>Robert Lembke";
  $a_quote[134]="Der emanzipierten Frau ins Stammbuch: Wer Ellbogen zeigt, kann auch Knie zeigen.<br>Karl Lagerfeld (Mode-Designer)";
  $a_quote[133]="Die Leute sind gar nicht so dumm, wie wir sie durchs Fernsehen noch machen werden.<br>Hans Joachim Kulenkampff (Schauspieler, Quizmaster)";
  $a_quote[132]="Der Wunsch ist der Vater des Gedankens.<br>William Shakespeare (Dramatiker)";
  $a_quote[131]="Verschließe nicht Deine Augen vor dem Leiden und lasse dein Bewußtsein nicht für seine Existenz abstumpfen. <br>Budda";
  $a_quote[130]="Viele Probleme sind von Menschen gemacht, darum können sie auch von Menschen gelöst werden.<br>John F. Kennedy (amerik. Präsident)";
  $a_quote[129]="Viele blenden, ohne einen Schimmer zu haben. <br>Heinz Erhard (Schriftsteller)";
  $a_quote[128]="Wenn es den Politikern die Sprache verschlägt, halten sie eine Rede.<br>Friedrich Nowottny (Journalist)";
  $a_quote[127]="Das ist keine Lüge sondern eine sachzwangreduzierte Ehrlichkeit.<br>Dieter Hildebrandt (Kabarettist)";
  $a_quote[126]="Wir brauchen das Bankwesen, aber keine Banken!<br>Bill Gates (Unternehmer)";
  $a_quote[125]="Computerviren haben ihre Existensberechtigung, denn ansonsten würden die Softwarehersteller von Antivirensoftware pleite gehen<br>Computerweisheit";
  $a_quote[124]="Wenn etwas schiefgehen kann, dann wird es auch schiefgehen. <br>Murphys Gesetze";
  $a_quote[123]="Fordere viel von dir selbst und erwarte wenig von den anderen. So wird dir Ärger erspart bleiben.<br>Konfuzius (Philosoph)";
  $a_quote[122]="Der Unterschied zwischen Glück und Vergnügen besteht darin, daß man sich das Vergnügen selber wählen kann.<br>Gustav Knuth (Schauspieler)";
  $a_quote[121]="Wer sich mit der Kunst verheiratet, bekommt die Kritik zur Schwiegermutter.<br>Hildegard Knef (Schauspielerin)";
  $a_quote[120]="Unsere äußeren Schicksale interessieren die Menschen, die inneren nur den Freund.<br>Heinrich von Kleist (Schriftsteller)";
  $a_quote[119]="Das Schönste an den meisten Männern ist die Frau an ihrer Seite.<br>Henry Kissinger (Politiker)";
  $a_quote[118]="Amerika ist ein sauberer Vorort von New York.<br>Ephraim Kishon (Schriftsteller)";
  $a_quote[117]="Wenn einer keine Angst hat, hat er keine Phantasie.<br>Erich Kästner (Schriftsteller)";
  $a_quote[116]="Phantasie ist unser guter Genius oder unser Dämon.<br>Immanuel Kant (Philosoph)";
  $a_quote[115]="Wer glaubt, ganz oben zu sein, ist schon auf dem Weg nach unten.<br>Placido Domingo (Sänger)";
  $a_quote[114]="Wir können lieben, was wir sind, ohne zu hassen, was wir nicht sind.<br>Kofi Annan (UN-Generalsekretär)";
  $a_quote[113]="In anderen Gärten wachsen auch hübsche Blumen. <br>Deutsches Sprichwort";
  $a_quote[112]="Um ein Darlehen zu bekommen, muß man erst beweisen, daß man keines braucht. <br>Murphys Gesetze";
  $a_quote[111]="Millionen Frauen lieben mich, doch meine Frau erkennt das nicht (Refrain aus Lied)<br>Karl Dall (Komiker)";
  $a_quote[110]="Wenn zwei Kuchen sich unterhalten, dann haben die Krümmel Redepause !<br>Tom Gerhard (Schauspieler, Komiker)";
  $a_quote[109]="Die Wahrheit geht nicht unter, aber es dauert oft lange, bis sie einen Ankerplatz findet.<br>Griechisches Sprichwort";
  $a_quote[108]="Du mußt nur die Laufrichtung ändern, sagte die Katze zur Maus und fraß sie.<br>Franz Kafka (Schriftsteller)";
  $a_quote[107]="Flirtende Ehemänner am Strand sind keine Gefahr, denn sie schaffen es nicht lange, den Bauch einzuziehen.<br>Heidi Kabel (Schauspielerin)";
  $a_quote[106]="Das absurde Verbrechen ist wie Religion. Unglaublich, aber faszinierend.<br>Alfred Hitchcock (Regisseur)";
  $a_quote[105]="Krankheiten befallen uns nicht aus heiterem Himmel, sondern entwickeln sich aus täglichen Sünden wider die Natur. Wenn sich diese gehäuft haben, brechen sie unversehens hervor.<br>Hippokrates (Arzt)";
  $a_quote[104]="Eines Tages werden Maschinen vielleicht nicht nur rechnen, sondern auch denken. Mit Sicherheit aber werden sie niemals Phantasie haben.<br>Theodor Heuss (Politiker)";
  $a_quote[103]="Wahrlich, keiner ist weise, der nicht das Dunkel kennt.<br>Hermann Hesse (Schriftsteller)";
  $a_quote[102]="Je älter man wird, desto mehr ähnelt die Geburtstagstorte einem Fackelzug.<br>Katharine Hepburn (Schauspielerin)";
  $a_quote[101]="Jeder hat ein System, reich zu werden, das nicht funktioniert. <br>Murphys Gesetze";
  $a_quote[100]="Bücher sprechen zum Verstand, Freunde zum Herzen, der Himmel zur Seele und alles andere zu den Ohren.<br>Chinesisches Sprichwort";
  $a_quote[99]="Die Erfahrung ist wie die Sonne, sie lässt die Blüten welken, aber die Früchte reifen.<br>Salvador Dali (Maler, Bildhauer, Graphiker)";
  $a_quote[98]="Das Einzige, wodurch ich mir je alt vorgekommen bin, waren die paar Male, wo ich mir erlaubt habe, berechenbar zu sein. <br>Carlos Santana (Musiker)";
  $a_quote[97]="Ich finde es richtig, daß man zu Beginn einer Jagd die Hasen und Fasane durch Hörnersignale warnt.<br>Gustav Heinemann (Politiker)";
  $a_quote[96]="Jede mathematische Formel in einem Buch halbiert die Verkaufszahl dieses Buches.<br>Stephen Hawking";
  $a_quote[95]="Das Üble an den Minderwertigkeitskomplexen ist, daß die falschen Leute sie haben.<br>Sir Alec Guiness (Schauspieler)";
  $a_quote[94]="Mancher Mensch hat ein grosses Feuer in seiner Seele, und niemand kommt, um sich daran zu wärmen.<br>Vincent van Gogh (Maler)";
  $a_quote[93]="Eine Smith und Wesson übertrumpft vier Asse. <br>Murphys Gesetze";
  $a_quote[92]="Es gibt zu dieser Auseinandersetzung, die wir gewinnen müssen und gewinnen werden, keine Alternative<br>Gerhard Schröder (Politiker)";
  $a_quote[91]="Die größte offene Drogenszene ist das Oktoberfest in München<br>Joschka Fischer (Politiker)";
  $a_quote[90]="Die Zeit ist ein so kostbares Gut, dass man sie nicht einmal für Geld kaufen kann. <br>Israelisches Sprichwort";
  $a_quote[89]="Ich habe Journalisten nie gemocht. Ich habe sie alle in meinen Büchern sterben lassen.<br>Agatha Christie (Schriftstellerin)";
  $a_quote[88]="Man muß einfach reden, aber kompliziert denken - nicht umgekehrt. <br>Franz Josef Strauß (Politiker)";
  $a_quote[87]="Der Kreis ist eine geometrische Figur, bei der an allen Ecken und Enden gespart wurde.<br>Mathematische Weisheit";
  $a_quote[86]="Was haben Loriot und Gina Wild gemeinsam? Immer hängt die Nudel im Gesicht.<br>Stefan Raab (Komiker)";
  $a_quote[85]="Michael Jackson wird 38 - zumindest Teile von ihm.<br>Harald Schmidt (Showmaster, Komiker)";
  $a_quote[84]="Eine gute Nachricht: Rudi Carell hört auf. Er ist der erste Holländer, der sich selbst auf die Standspur schiebt.<br>Mike Krüger (Schauspieler, Komiker, Sänger)";
  $a_quote[83]="Willkürlich handeln ist des Reichen Glück.<br>Johann Wolfgang von Goethe (Dichter)";
  $a_quote[82]="Nur im Urlaub gibt es die ewige Liebe für vierzehn Tage<br>Uschi Glas (Schauspielerin)";
  $a_quote[81]="Die Neugier steht immer an erster Stelle eines Problems, das gelöst werden will.<br>Galileo Galilei (Mathematiker, Physiker)";
  $a_quote[80]="Wenn du die Hand zur Faust ballst, kann dir weder jemand etwas hineinlegen, noch kannst du mit dieser Hand etwas aufnehmen. <br>Afrikanisches Sprichwort";
  $a_quote[79]="Eine erloschene Leidenschaft ist kälter als Eis.<br>Zsa Zsa Gabor (Schauspielerin)";
  $a_quote[78]="Ein Fußgänger ist ein glücklicher Autofahrer, der einen Parkplatz gefunden hat.<br>Joachim Fuchsberger (Schauspieler)";
  $a_quote[77]="Man hat niemals Zeit, es richtig zu machen, aber immer Zeit, es noch einmal zu machen. <br>Murphys Gesetze";
  $a_quote[76]="Unsere Nachbarn brauchen keine Tonne, denn das sind Ökos, die fressen ihren Müll!<br>Gaby Köster (Schauspielerin)";
  $a_quote[75]="Es gibt ebensowenig hundertprozentige Wahrheit wie hundertprozentigen Alkohol.<br>Sigmund Freud (Arzt, Psychologe)";
  $a_quote[74]="Zeitverschwendung ist die leichteste aller Verschwendungen<br>Henry Ford (Unternehmer)";
  $a_quote[73]="Ich weiß nicht, welche Waffen im nächsten Krieg zur Anwendung kommen, wohl aber, welche im übernächsten: Pfeil und Bogen.<br>Albert Einstein (Physiker)";
  $a_quote[72]="Ich glaube, ein Mann will von einer Frau das gleiche wie eine Frau von einem Mann: Respekt.<br>Clint Eastwood (Schauspieler)";
  $a_quote[71]="9% haben das Dumm-Gen, da bin ich aber froh, dass ich zu den anderen 71% gehöre<br>Stefan Raab (Komiker)";
  $a_quote[70]="Wenn die Hoffnung aufwacht, legt sich die Verzweiflung schlafen. <br>Asiatische Weisheit";
  $a_quote[69]="Wer Freunde ohne Fehler sucht, bleibt ohne Freunde.<br>Englisches Sprichwort";
  $a_quote[68]="Wer sich Freunde mit Geld kaufen will wird merken dass es nur bedingt funktioniert, denn wenn man kein Geld mehr hat, hat man auch keine Freunde mehr<br>Urheber unbekannt";
  $a_quote[67]="Gebildet ist, wer weiß, wo er findet, was er nicht weiß.<br>Simmel (Buchautor)";
  $a_quote[66]="Die Arbeitsämter sind zu sehr zu Sozialämtern für Arbeitslose geworden<br>Florian Gerster (Chef Bundesanstalt für Arbeit)";
  $a_quote[65]="Über Dieter Bohlen: Er ist ein Freak mit der gewissen Faszination eines Autounfalls. Der ist auch schrecklich. Aber beim Vorbeifahren muss man doch immer wieder hinschauen!<br>Verona Feldbusch (Model)";
  $a_quote[64]="Die Alteingesessenen, die sagen hin und wieder mal Sachen, wo ich nicht weiß, was sie gesagt haben, da nicke ich dann einfach und lächele<br>Michael Ballack (Fussballer)";
  $a_quote[63]="Keine Sendung ist so gut wie die Gespräche, die danach bei unglaublich viel Alkohol geführt werden<br>Sandra Maischberger (Talkmasterin)";
  $a_quote[62]="Ich habe 2 Geschirrspüler: rechte und linke Hand<br>Sven Hannawald (Skispringer)";
  $a_quote[61]="Es gibt zwei Arten guter Menschen: Die Toten und die Ungeborenen. <br>Chinesisches Sprichwort";
  $a_quote[60]="Ich habe die Frage beantwortet: ich beantworte die Frage nicht<br>Helmut Kohl (Altkanzler)";
  $a_quote[59]="Die Männer beteuern immer, sie lieben die innere Schönheit der Frau - komischerweise gucken sie aber ganz woanders hin.<br>Marlene Dietrich (Schauspielerin, Sängerin)";
  $a_quote[58]="Die Männer sind doch Kavaliere. Mancher Mann begleitet seine Frau beim Rasenmähen sogar mit einem Sonnenschirm.<br>Doris Day (Schauspielerin, Sängerin)";
  $a_quote[57]="Im Zweifel ist mir ein Versprecher vor dem Mikrophon lieber als eine Flanke hinters Tor<br>Rudi Völler (Fussballtrainer)";
  $a_quote[56]="Über München: Die Stadt ist viel gemütlicher als Hamburg - ein bisschen wie Groß-Entenhausen<br>Verona Feldbusch";
  $a_quote[55]="Ruhm hat nichts mit Popularität zu tun. Popularität hält manchmal nur von einem Klatsch zum nächsten.<br>Charlie Chaplin (Schauspieler, Regisseur, Produzent)";
  $a_quote[54]="Wer sich in der eigenen Gesellschaft nicht wohl fühlt, hat gewöhnlich ganz recht.<br>Coco Chanel (Mode-Designerin)";
  $a_quote[53]="Zivildiener: das sind die, die nicht mit der Waffe töten dürfen. Sie tun es mit Essen auf Rädern.<br>Harald Schmidt (Showmaster, Komiker)";
  $a_quote[52]="Nachrichtensprecher fangen stets mit Guten Abend an und brauchen dann 15 Minuten, um zu erklären, daß es kein guter Abend ist.<br>Rudi Carell (Showmaster)";
  $a_quote[51]="Zu oft mit der Faust auf den Tisch schlagen, bekommt der Faust schlechter als dem Tisch.<br>Willy Brandt (Politiker)";
  $a_quote[50]="Mit einem kurzen Schweifwedeln kann ein Hund mehr Gefühl ausdrücken, als mancher Mensch mit stundenlangem Gerede.<br>Louis Armstrong (Musiker)";
  $a_quote[49]="Geld ist besser als Armut - wenn auch nur aus finanziellen Gründen.<br>Woody Allen (Filmregisseur, Schauspieler )";
  $a_quote[48]="Jedes fertige Programm, das läuft, ist veraltet<br>Alte Computerweisheit";
  $a_quote[47]="Ich bin ein Spießer vor dem Herrn. Nur ein Kleinbürger kann auch Kleinbürger unterhalten.<br>Thomas Gottschalk (Showmaster)";
  $a_quote[46]="Wenn Ebbe ist, macht es keinen Sinn, Wasser ins Meer zu pumpen<br>Franz Müntefering (Politiker)";
  $a_quote[45]="Man kann auch ohne Geld glücklich sein. Das ist aber nicht unbedingt die Botschaft eines Finanzministers<br>Hans Eichel (Politiker)";
  $a_quote[44]="Mit Lügen kommt man um die ganze Welt, aber nicht wieder zurück<br>Sprichwort polnischer Herkunft";
  $a_quote[43]="Der Computer ist die logische Weiterentwicklung des Menschen: Intelligenz ohne Moral.<br>John Osborne";
  $a_quote[42]="Es gibt keine Software ohne Fehler - Gäbe es sie doch, müssten die Fehler nachträglich eingebaut werden<br>Alte Computerweisheit";
  $a_quote[41]="Der beste Platz für Politiker ist das Wahlplakat. Dort ist er tragbar, geräuschlos und leicht zu entfernen<br>Loriot";
  $a_quote[40]="Das einzige Team, was besseren Frauenfußball spielt, ist unsere Herren-Nationalmanschaft.<br>Stefan Raab (Komiker)";
  $a_quote[39]="Ein Computerprogramm tut, was Du schreibst, nicht was Du willst. <br>Murphys Gesetze";
  $a_quote[38]="Nehmen Sie die Menschen, wie sie sind, andere gibt's nicht.<br>Konrad Adenauer (Politiker)";
  $a_quote[37]="Das Theater ist weder eine Schulstube noch ein Priesterseminar. Die Leute sollen entweder lachen oder flennen. Oder beides.<br>Carl Zuckmayer (Schriftsteller)";
  $a_quote[36]="Allem kann ich widerstehen, nur der Versuchung nicht.<br>Oscar Wilde (Schriftsteller)";
  $a_quote[35]="Kunst ist schön. Macht aber viel Arbeit.<br>Karl Valentin (Kabarettist, Komiker)";
  $a_quote[34]="Was braucht man, um erfolgreich zu sein? Unwissenheit und Selbstvertrauen.<br>Mark Twain (Schriftsteller)";// <!--Copyright 2004 by der onlinemarkt, Peter Blum-->
  $a_quote[33]="Wenn ein Mensch ein Loch sieht, hat er das Bestreben, es auszufüllen. Dabei fällt er meistens hinein.<br>Kurt Tucholsky (Schriftsteller)";
  $a_quote[32]="Amors Streifschüsse nennt man Flirt.<br>Georg Thomalla (Schauspieler)";
  $a_quote[31]="Ich bin mir nicht zu fein, um mit anderen Leuten in der ersten Klasse zu fliegen<br>Gloria Fürstin von Thurn und Taxis";
  $a_quote[30]="Ich habe bei E-Mails die Erfahrung gemacht: die Geschwindigkeit des Nachdenkens erhöht sich nicht, sondern nur die Geschwindigkeit der Informationsübermittlung<br>Otto Graf Lambsdorff (Politiker)";
  $a_quote[29]="Nur wer in der Bundesliga arbeitet, weiß, wie es an der Front aussieht<br>Ottmar Hitzfeld (Fussballtrainer)";
  $a_quote[28]="Meine Sätze führen mich in Gefilde, in die sich noch kein Mensch gewagt hat<br>George W. Bush (amerik. Präsident)";
  $a_quote[27]="Gysi war der Meister der Talk-Shows - bis ich kam<br>Guido Westerwelle (Politiker)";
  $a_quote[26]="Fußball im Pay-TV, das heißt: Erst zahlen, dann langweilen! <br>Harald Schmidt (Showmaster, Komiker)";
  $a_quote[25]="Das Rückgrat ist bei manchen Politikern unterentwickelt - vielleicht weil es sowenig benutzt wird. <br>Margaret Thatcher (Politikerin)";
  $a_quote[24]="Jedes Kind ist kostbar. Jedes ist ein Geschöpf Gottes.<br>Mutter Teresa (Ordensschwester)";
  $a_quote[23]="Die Troubadoure von heute benützen keine Mandolinen mehr, sondern Autohupen.<br>Igor Strawinsky (Komponist)";
  $a_quote[22]="Wenn man die Inschriften auf den Friedhöfen liest, fragt man sich unwillkürlich, wo denn eigentlich die Schurken begraben liegen.<br>Peter Sellers (Schauspieler)";
  $a_quote[21]="Frauen sind nicht etwa die besseren Menschen, sie hatten bisher nur nicht soviel Gelegenheit, sich die Hände schmutzig zu machen.<br>Alice Schwarzer (Feministin)";
  $a_quote[20]="Nur im Auto kann ein Mensch der total organisierten Gesellschaft noch eigene Entschlüsse fassen und sein eigener Herr sein.<br>Helmut Schmidt (Altkanzler)";
  $a_quote[19]="Lächeln ist das Kleingeld des Glücks.<br>Heinz Rühmann (Schauspieler)";
  $a_quote[18]="Hollywood ist ein Ort, wo sie dir 50000 Dollar für einen Kuß und 50 Cent für deine Seele zahlen.<br>Marylin Monroe (Schauspielerin)";// <!--Copyright 2004 by der onlinemarkt, Peter Blum-->
  $a_quote[17]="Es gibt sicher viele Gründe für die Scheidung, aber der Hauptgrund ist und bleibt die Hochzeit.<br>Jerry Lewis (Schauspieler, Komiker)";
  $a_quote[16]="Als Kind ist einem doch die Welt ziemlich klar - und wenn man stirbt, weiß man gar nichts.<br>Hans Joachim Kulenkampff (Schauspieler, Showmaster)";
  $a_quote[15]="Sie sagen der Schlangenbiss sei tödlich. Wie tödlich ?<br>Jürgen Fliege (Talkmaster und Pfarrer)";
  $a_quote[14]="Mein Ring ist ein Unikat - meine Frau hat genau den gleichen!!!<br>Oliver Geissen (Talkmaster)";
  $a_quote[13]="Barbie wird 45... oder wie Frauen sagen: 29<br>Stefan Raab (Komiker)";
  $a_quote[12]="Solche Berge gibt es nur in den Bergen<br>Gunter Emmerlich (Moderator)";
  $a_quote[11]="Meine Tochter ist jetzt 3 Monate und 4 Wochen alt<br>Nadja Auermann";
  $a_quote[10]="Wenn du alles glaubst, was du liest, dann solltest du besser nicht lesen<br>Japanisches Sprichwort";
  $a_quote[9]="Druck habe ich nur, wenn ich morgens auf die Toilette muß<br>Oliver Reck (Fussballer)";
  $a_quote[8]="Ich weiß nicht, ob ich wirklich empfehlen soll, achtzig zu werden - es ist weniger wegen des Alters, sondern vielmehr wegen der Plage, solche Feiern zu überstehen<br>Prinz Philip";
  $a_quote[7]="Es gibt nichts, was einem Sieg in der Formel 1 gleichkommt-weder auf finanziellem noch auf sexuellem Gebiet<br>David Coulthard (Formel-1 Fahrer)";
  $a_quote[6]="Inhaltsgemäss: Fettnäpfchen sind dafür da, um reinzutreten !<br>Mario Basler (Fussballer)";
  $a_quote[5]="In der Steuererklärung wird es künftig nur noch 2 Punkte geben: Was haben Sie letztes Jahr verdient? Und: Schicken Sie es uns<br>Matthias Richling (Kabarettist)";
  $a_quote[4]="Richtig ist, dass der Kanzler vor mir lag und dass ich vor dem Kanzler lag<br>Angela Merkel (Politikerin)";
  $a_quote[3]="Zuschauer, die mich nicht mehr sehen wollen, können umschalten. Ich glaube, nirgends funktioniert die Demokratie in Deutschland so gut wie bei der Fernbedienung<br>Jörg Pilawa (Moderator)";
  $a_quote[2]="Die andere Schlange kommt stets schneller voran. <br>Murphys Gesetze";
  $a_quote[1]="Auch wenn Bio draufsteht, ist es nicht giftig<br>Bernhard Brau (Politiker)";
  $a_quote[0]="Als Siegfried und Roy sich kennenlernten, hießen sie noch Cindy und Bert!<br>Harald Schmid (Showmaster, Komiker)";
  echo $a_quote[date('z')];
}

/** 
 * Gibt das aktuelle Datum formatiert aus. 
 * 
 * @return void 
 */ 
function getEyes_showDate() {
  # === Deutsche Wochentage 
  $a_days[0] = 'Sonntag';
  $a_days[1] = 'Montag';
  $a_days[2] = 'Dienstag';
  $a_days[3] = 'Mittwoch';
  $a_days[4] = 'Donnerstag';
  $a_days[5] = 'Freitag';
  $a_days[6] = 'Samstag';
  $s_day = $a_days[date('w')];
  
  # === Aktueller Zeitstempel 
  $s_date = date('j.n.Y');
  $s_time = date('G:i');
  
  # === Ausgabe des Datums 
  echo "Heute ist $s_day, der $s_date, es ist $s_time Uhr.";
}

/**
 * Gibt im Adminbereich ein Zufälliges Zitat aus. 
 * 
 * @return void 
 */ 
function getEyes_zdt() {
  # === Ausgabe des Zitat des Tages 
  echo '<div id="getEyes_quote"><p>';
  getEyes_showDate(); 
  echo '<br><i>Das Zitat des Tages lautet:</i><br>';
  getEyes_showRandomQuote(); 
  echo '</p></div>'; 
}

# === Aufruf unserer Funktion, wenn admin_notices-Aktion ausgeführt wird. 
add_action('admin_notices', 'getEyes_zdt');

/**
 * Ausgabe unseres CSS-Designs. 
 * 
 * @return void 
 */
function getEyes_cssZDT() {
  # === Sicherstellen, dass die Positionierung für Rechts-nach-links-Sprachen gut dargestellt werden. 
  $x = (is_rtl() ? 'left' : 'right');
  
  echo "  <style type='text/css'>
    #getEyes_quote {
      float: $x;
      padding-$x: 15px;
      padding-top: 5px;
      margin: 0;
      font-size: 11px;
      text-align: center;
    }
  </style>";
}

# === Aufruf unserer Funktion, wenn admin_head-Aktion ausgeführt wird. 
add_action('admin_head', 'getEyes_cssZDT');
