function actionFormulaire(action)  {
    document.forms[0].action = action  // définir l'action associée au formulaire'
    document.forms[0].submit();        // Valider le formulaire
    return true;
}
 