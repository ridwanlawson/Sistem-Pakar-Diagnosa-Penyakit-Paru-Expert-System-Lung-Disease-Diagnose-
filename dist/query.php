$query = mysqli_query($conn, "SELECT transaksi.tot_bayar, pengiriman.*, kota.*, tarif.* FROM transaksi, pengiriman, kota, tarif WHERE transaksi.id_pengiriman = pengiriman.id_pengiriman AND pengiriman.id_tarif = tarif.id_tarif AND tarif.id_kota = kota.id_kota AND NOT EXISTS (SELECT tracking.* FROM tracking WHERE tracking.id_pengiriman = pengiriman.id_pengiriman AND status = 'sampai' OR status = 'selesai')")