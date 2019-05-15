//event saat link di klik

$('.page-scroll').on('click', function(e){
	
	//ambil isi href
	var tujuan = $(this).attr('href');
	//tangkap element ybs
	var elemenTujuan = $(tujuan);

	$('html , body').animate({
		scrollTop: elemenTujuan.offset().top-50
	}, 2000,'easeInOutBounce');
	
	console.log('ok');
	e.preventDefault();

});