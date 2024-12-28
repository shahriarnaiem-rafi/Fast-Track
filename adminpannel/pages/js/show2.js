//show transection
document.getElementById('my-dashboard').addEventListener("click", function(){
    showSelectionBtn('dashboard-hidden');
    document.getElementById('my-dashboard').classList.add('hidden');
    // document.getElementById('transection-history').classList.add('bg-[#B4F461]');
    // document.getElementById('donation-btn').classList.remove('bg-[#B4F461]');
})
document.getElementById('donation-btn').addEventListener("click", function(){
    showSelectionBtn('card-container');
    document.getElementById('donation-btn').classList.add('bg-[#B4F461]');
    document.getElementById('transection-history').classList.remove('bg-[#B4F461]');
});