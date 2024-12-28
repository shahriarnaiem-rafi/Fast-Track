function showSelectionBtn(id){
    //hide 
    document.getElementById('form-hidden').classList.add('hidden');
    document.getElementById('dashboard-hidden').classList.add('hidden');

    //show
    document.getElementById(id).classList.remove('hidden');

}
