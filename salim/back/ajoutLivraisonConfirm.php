<?PHP
    include "../entities/Livraison.php";
    include "../core/LivraisonC.php";
    
    if (isset($_POST['Confirmer'])){
        if (isset($_POST['codeC']) /*and isset($_POST['idL'])*/ and isset($_POST['dateL']) and isset($_POST['idLivreur']) and isset($_POST['descL']))
        {
            $Livraison1=new Livraison($_POST['codeC'],$_POST['idL'],$_POST['dateL'],$_POST['idLivreur'],$_POST['descL']);
            $Livraison1C=new LivraisonC();
            $Livraison1C->ajouterLivraison($Livraison1);
            $zebby=$_POST['dateL'];
            $to='fiver.raslambout@gmail.com'; // Receiver Email ID, Replace with your email ID
		    $subject='Form Submission';
            $message="Merci pour votre commande Votre commande sera livrée le $zebby ";
            $headers="From: E-Rayen support";
            mail($to, $subject, $message, $headers);
?>      
            <script>window.location="GestionLivraison.php";</script>
<?php 
        }
    }
?>