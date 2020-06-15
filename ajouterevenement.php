<?PHP
include "../entities/evenement.php";
include "../core/evenementC.php";
require '../../api/PHPMailer/src/PHPMailer.php';
if(($_POST['dateevent'])>($_POST['datefinevent'])){
	echo "la date de fin est inférieure à la date début";
}
if (isset($_POST['nom']) and isset($_FILES['Image']['name'])) {

		$targetDir = "photo/";
		$fileName = basename($_FILES['Image']['name']);
		$targetFilePath = $targetDir . $fileName;
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

		move_uploaded_file($_FILES['Image']['tmp_name'], $targetFilePath);

		$ev1 = new evenement($_POST['nom'], $_POST['dateevent'], $_POST['place'], $_POST['datefinevent'], $targetFilePath);

		$ev = new evenementC();
		$ev->ajouterEvenement($ev1);
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
    $mail->Body = "<p>Bonjour cher client un nouveau évènement commence sur notre site merci de vérifier nos actualité. </p><br>";
    if(!$mail->send()) {
        echo 'Erreur, message non envoyé.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Le message a bien été envoyé !';
    }
    header('Location: events.php');

