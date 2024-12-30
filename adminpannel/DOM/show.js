
document.getElementById('dashboard-btn').addEventListener("click",function(event){
    event.preventDefault()
    document.getElementById('dashboard-section').classList.remove('hidden');

})
document.getElementById('user-btn').addEventListener("click",function(event){
    event.preventDefault()
    document.getElementById('user-id').classList.remove('hidden');
    document.getElementById('dashboard-section').classList.add('hidden');

})