<h4># ACSEO Exercice Note :</h4>
<p><em>Des commentaires sont disponibles directement dans le code source.</em></p>
<p>J'ai pass&eacute; 4h de temps pour r&eacute;aliser cette exercice.</p>
<p><strong>Vid&eacute;os d&eacute;mo :</strong></p>
<ul>
<li><a href="https://drive.google.com/file/d/1unnnmVGoRom9FUCHX6-a2b7xlH_a_uOM/view?usp=sharing">Vidéo 1</a></li>
<li><a href="https://drive.google.com/file/d/18aeG12PVuxNf9XqjpZt1hYxDQyeiGdOu/view?usp=sharing">Vidéo 2</a></li>
</ul>
<p><strong>Capture d'&eacute;cran de la base de donn&eacute; :</strong></p>
<ul>
<li><a href="https://drive.google.com/file/d/1z0j3QL-YNNutPkmjB-KVTHDPRFOYEGY9/view?usp=sharing">https://drive.google.com/file/d/1z0j3QL-YNNutPkmjB-KVTHDPRFOYEGY9/view?usp=sharing </a></li>
</ul>
<p>S&eacute;rialisation JSON -&gt; MainController.php</p>
<p>Backoffice -&gt; AdminController.php</p>
<p>Lien utile vers le code : 
<a href"https://github.com/AlexisMartinezDev/AlexisMartinezDev-ACSEO-exercice/commit/2fe70ef3d74613d44c1ee8a11557ce24242e3b08#diff-15f7f071121bfa3ffa4bf6f5b31db091f12a2ce65acae1642ab42c45e0c9eef7">https://github.com/AlexisMartinezDev/AlexisMartinezDev-ACSEO-exercice/commit/2fe70ef3d74613d44c1ee8a11557ce24242e3b08#diff-15f7f071121bfa3ffa4bf6f5b31db091f12a2ce65acae1642ab42c45e0c9eef7
</a>
</p>
<p><strong>Remarque :</strong></p>
<p>J'ai utilis&eacute; une Query (avec QueryBuilder) pour grouper les messages dans le backoffice, dans le QuestionsRepository.php. <br/><br/>
Le chemin du dossier JSON o&ugrave; sont g&eacute;n&eacute;r&eacute;s les fichiers lors d'un envoi de message a bien &eacute;t&eacute; d&eacute;plac&eacute; &agrave; l'ext&eacute;rieur du dossier public pour ne pas rendre ces informations accessibles dans l'URL.<br/><br/>
L'entit&eacute; 'Questions' poss&egrave;de un attribut boolean 'Statut' permettant de valider ou non le traitement d'une question sur le backoffice.</p>
