CREATE SCHEMA kasirv1;

CREATE TABLE kasirv1.barang (
    id_barang INT(11) PRIMARY KEY,
    nama VARCHAR(100),
    harga INT(11),
    jumlah INT(11)
);

CREATE TABLE kasirv1.role (
    id_role INT(11) PRIMARY KEY,
    nama VARCHAR(100)
);

CREATE TABLE kasirv1.transaksi  (
    id_transaksi INT(11) PRIMARY KEY,
    tanggal_waktu DATETIME,
    nomor VARCHAR(50),
    total DECIMAL(10, 2),
    nama_pembeli VARCHAR(100)
);

CREATE TABLE kasirv1.transaksi_detail (
    id_transaksi_detail INT(11) PRIMARY KEY,
    id_transaksi INT(11),
    id_barang INT(11),
    qty INT(11),
    total BIGINT(20),
    FOREIGN KEY (id_transaksi) REFERENCES transaksi(id_transaksi),
    FOREIGN KEY (id_barang) REFERENCES barang(id_barang)
);

CREATE TABLE kasirv1.user (
    id_user INT(11) PRIMARY KEY,
    nama VARCHAR(100),
    username VARCHAR(100),
    password VARCHAR(100),
    role_id INT(11),
    FOREIGN KEY (role_id) REFERENCES role(id_role)
);
