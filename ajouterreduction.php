<?PHP
include "../entities/reduction.php";
include "../core/reductionC.php";
require '../../api/PHPMailer/src/PHPMailer.php';

if (isset($_POST['pourcent']) and isset($_POST['dateexp'])) {

		
		$red = new reduction($_POST['pourcent'], $_POST['idevent'], $_POST['dateexp']);

		$ev = new reductionC();
		$ev->ajouterReduction($red);
	} else {
		echo "vérifier les champs";
	}
	//Send Mail
    $mail = new \PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP
    $mail->Host = 'smtp.gmail.com'; // Spécifier le serveur SMTP
    $mail->SMTPAuth = true; // Activer authentication SMTP
    $mail->Username = 'ahmed.rzem@esprit.tn'; // Votre adresse email d'envoi
    $mail->Password = '181JMT2342'; // Le mot de passe de cette adresse email
    $mail->SMTPSecure = 'ssl'; // Accepter SSL
    $mail->Port = 465;

    $mail->setFrom('no-reply@rayen.com', 'El rayen meubles'); // Personnaliser l'envoyeur
    $mail->addAddress('ihebsaadaoui2@gmail.com');
    $mail->isHTML(true); // Paramétrer le format des emails en HTML ou non
    $mail->Subject = 'Email Verification';
    $mail->Body = "<p>Bonjour cher client une nouvelle réduction est disponible sur notre site</p><br>";
    if(!$mail->send()) {
        echo 'Erreur, message non envoyé.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Le message a bien été envoyé !';
    }

    header('Location: reductions.php');


?>