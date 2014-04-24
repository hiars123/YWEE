<?php
// Anpassung und Aufteilung des Layouts: Daniel Tatzel
// Muss in der Reihenfolge bleiben
include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/ConToDB.php");       // Inkludiert die Funktion zur Anmeldung an der DB
include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/StaticDBFuncs.php"); // Inkludiert statische DB Funktionen
include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/counter.php");       // Inkludiert den Counter Script
include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/login.php");         // Inkludiert das Login Script. Bleibt vorerst so, muesste mit AJAX implementiert werden

$titel = "Impressum"; // Name der Seite die im Browser angezeigt werden soll

include("$_SERVER[DOCUMENT_ROOT]/layout/header.php");   // Inkludiert den Header
include("$_SERVER[DOCUMENT_ROOT]/layout/nav.php");      // Inkludiert die Navigationsleiste
include("$_SERVER[DOCUMENT_ROOT]/layout/leftbar.php");  // Inkludiert den linken Balken
include("$_SERVER[DOCUMENT_ROOT]/layout/rightbar.php"); // Inkludiert den rechten Balken

// $_POST Debug
//print_r($_POST);

// Inhalt von: Alexander Strobl
?>

<!-- Impressum -->
<h3 id="impressum">Ihr pers&ouml;nliches Impressum</h3><h1>Impressum</h1><p>Angaben gem&auml;&szlig; &sect; 5 TMG:<br/><br/></p>
<p>Sepp Meier<br />
Die Tutoren AG<br />
Pr&uuml;feninger Strasse, 58<br />
93049 Regensburg<br />
</p>
<h2>Kontakt:</h2>
<table><tr>
<td><p>Telefon:</p></td>
<td><p>0123456789</p></td></tr>
<!-- <tr><td><p>Telefax:</p></td> 
<td><p></p></td></tr> -->
<tr><td><p>E-Mail:</p></td>
<td><p>support@tutoren-ag.de</p></td>
</tr></table>
<br>
<p>Quelle: <i><a rel="nofollow" href="http://www.e-recht24.de/impressum-generator.html">http://www.e-recht24.de</a></i></p>



<!-- Disclaimer -->
<h3 id="disclaimer">Ihr pers&ouml;nlicher Disclaimer:</h3><h1>Haftungsausschluss (Disclaimer)</h1>
<p><strong>Haftung f&uuml;r Inhalte</strong></p> <p>Als Diensteanbieter sind wir gem&auml;&szlig; &sect; 7 Abs.1 TMG f&uuml;r eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach &sect;&sect; 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, &uuml;bermittelte oder gespeicherte fremde Informationen zu &uuml;berwachen oder nach Umst&auml;nden zu forschen, die auf eine rechtswidrige T&auml;tigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unber&uuml;hrt. Eine diesbez&uuml;gliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung m&ouml;glich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p> <p><strong>Haftung f&uuml;r Links</strong></p> <p>Unser Angebot enth&auml;lt Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb k&ouml;nnen wir f&uuml;r diese fremden Inhalte auch keine Gew&auml;hr &uuml;bernehmen. F&uuml;r die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf m&ouml;gliche Rechtsverst&ouml;&szlig;e &uuml;berpr&uuml;ft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p> <p><strong>Urheberrecht</strong></p> <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielf&auml;ltigung, Bearbeitung, Verbreitung und jede Art der Verwertung au&szlig;erhalb der Grenzen des Urheberrechtes bed&uuml;rfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur f&uuml;r den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p><br>
<p><i>Quellenangaben: <a rel="nofollow" href="http://www.e-recht24.de/muster-disclaimer.html" target="_blank">eRecht24 Disclaimer</a>, <a rel="nofollow" href="http://www.e-recht24.de/muster-disclaimer.html" target="_blank">Disclaimer</a> von eRecht24, dem Portal zum Internetrecht von Rechtsanwalt S&ouml;ren Siebert</i></p>


<!-- Datenschutzerkl&auml;rung -->
<h3 id="disclaimer">Ihre pers&ouml;nliche Datenschutzerkl&auml;rung:</h3><h1>Datenschutzerkl&auml;rung:</h1>
<p><strong>Datenschutz</strong></p> <p>Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten m&ouml;glich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit m&ouml;glich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdr&uuml;ckliche Zustimmung nicht an Dritte weitergegeben. </p> <p>Wir weisen darauf hin, dass die Daten&uuml;bertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitsl&uuml;cken aufweisen kann. Ein l&uuml;ckenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht m&ouml;glich. </p> <p>Der Nutzung von im Rahmen der Impressumspflicht ver&ouml;ffentlichten Kontaktdaten durch Dritte zur &Uuml;bersendung von nicht ausdr&uuml;cklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdr&uuml;cklich widersprochen. Die Betreiber der Seiten behalten sich ausdr&uuml;cklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.</p>
<br>
<p><strong>Datenschutzerkl&auml;rung f&uuml;r die Nutzung von Facebook-Plugins (Like-Button)</strong></p> <p>Auf unseren Seiten sind Plugins des sozialen Netzwerks Facebook (Facebook Inc., 1601 Willow Road, Menlo Park, California, 94025, USA) integriert. Die Facebook-Plugins erkennen Sie an dem Facebook-Logo oder dem "Like-Button" ("Gef&auml;llt mir") auf unserer Seite. Eine &Uuml;bersicht &uuml;ber die Facebook-Plugins finden Sie hier: <a href="http://developers.facebook.com/docs/plugins/" target="_blank">http://developers.facebook.com/docs/plugins/</a>.<br /> Wenn Sie unsere Seiten besuchen, wird &uuml;ber das Plugin eine direkte Verbindung zwischen Ihrem Browser und dem Facebook-Server hergestellt. Facebook erh&auml;lt dadurch die Information, dass Sie mit Ihrer IP-Adresse unsere Seite besucht haben. Wenn Sie den Facebook "Like-Button" anklicken w&auml;hrend Sie in Ihrem Facebook-Account eingeloggt sind, k&ouml;nnen Sie die Inhalte unserer Seiten auf Ihrem Facebook-Profil verlinken. Dadurch kann Facebook den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der &uuml;bermittelten Daten sowie deren Nutzung durch Facebook erhalten. Weitere Informationen hierzu finden Sie in der Datenschutzerkl&auml;rung von facebook unter <a href="http://de-de.facebook.com/policy.php" target="_blank"> http://de-de.facebook.com/policy.php</a></p> <p>Wenn Sie nicht w&uuml;nschen, dass Facebook den Besuch unserer Seiten Ihrem Facebook-Nutzerkonto zuordnen kann, loggen Sie sich bitte aus Ihrem Facebook-Benutzerkonto aus.</p>
<br>
<p><strong>Datenschutzerkl&auml;rung f&uuml;r die Nutzung von Google Analytics</strong></p> <p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. ("Google"). Google Analytics verwendet sog. "Cookies", Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie erm&ouml;glichen. Die durch den Cookie erzeugten Informationen &uuml;ber Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA &uuml;bertragen und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europ&auml;ischen Union oder in anderen Vertragsstaaten des Abkommens &uuml;ber den Europ&auml;ischen Wirtschaftsraum zuvor gek&uuml;rzt.</p> <p>Nur in Ausnahmef&auml;llen wird die volle IP-Adresse an einen Server von Google in den USA &uuml;bertragen und dort gek&uuml;rzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports &uuml;ber die Websiteaktivit&auml;ten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegen&uuml;ber dem Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser &uuml;bermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengef&uuml;hrt.</p> <p>Sie k&ouml;nnen die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht s&auml;mtliche Funktionen dieser Website vollumf&auml;nglich werden nutzen k&ouml;nnen. Sie k&ouml;nnen dar&uuml;ber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem sie das unter dem folgenden Link verf&uuml;gbare Browser-Plugin herunterladen und installieren: <a href="http://tools.google.com/dlpage/gaoptout?hl=de">http://tools.google.com/dlpage/gaoptout?hl=de</a>.<br>
<p><i>Quellen: <a rel="nofollow" href="http://www.e-recht24.de/muster-datenschutzerklaerung.html" target="_blank">eRecht24 Datenschutzerkl&auml;rung</a>, <a rel="nofollow" href="http://www.e-recht24.de/artikel/datenschutz/6590-facebook-like-button-datenschutz-disclaimer.html" target="_blank">Facebook-Disclaimer von eRecht24</a>, <a rel="nofollow" href="http://www.google.com/intl/de/analytics/learn/privacy.html" target="_blank">Google Analytics Bedingungen</a></i></p>


<?php include("layout/footer.php"); // Inkludiert den Footer ?>