
 Class Diagram!
[class_diagram_from_erd](https://github.com/user-attachments/assets/1dd6a29c-bc4d-46ad-82e9-93d8d43c6600)
 Penjelasan Class Diagram!
1.	Admin
o	Bertanggung jawab untuk mengelola pengguna, khususnya guru.
o	Atribut: email, password.
o	Metode:
	manageUsers(): Mengelola data pengguna.
	login(): Untuk masuk ke sistem.
2.	Student (Siswa)
o	Merepresentasikan data siswa yang terdaftar dalam kelas.
o	Atribut: student_id, nim, name, email, gender, class_id, address.
o	Metode:
	joinClass(): Untuk bergabung ke kelas.
	submitAssignment(): Mengumpulkan tugas.
3.	Teacher (Guru)
o	Guru bertugas membuat dan mengelola kelas serta siswa di dalamnya.
o	Atribut: teacher_id, nidk, name, email, gender, class_list.
o	Metode:
	createClass(): Membuat kelas baru.
	manageStudents(): Mengelola siswa yang terdaftar.
4.	Class (Kelas)
o	Merepresentasikan kelas yang dikelola oleh guru.
o	Atribut: class_id, teacher_id, name, schedule_id, module_id.
o	Metode:
	addStudent(): Menambahkan siswa ke kelas.
	removeStudent(): Menghapus siswa dari kelas.
5.	Schedule (Jadwal)
o	Jadwal yang terkait dengan kelas.
o	Atribut: schedule_id, class_list, hari (monday - sunday), location.
o	Metode:
	setSchedule(): Mengatur jadwal untuk kelas.
	viewSchedule(): Melihat jadwal kelas.
6.	Module (Modul)
o	Materi pembelajaran yang digunakan dalam kelas.
o	Atribut: module_id, name, description, category, created_date, file.
o	Metode:
	uploadModule(): Mengunggah modul ke sistem.
	viewModule(): Melihat atau mengakses modul.
________________________________________
Hubungan Antar Kelas
•	Admin: Mengelola data Teacher.
•	Teacher: Membuat Class dan mengelola Student di dalamnya.
•	Class: Memiliki hubungan dengan Schedule (jadwal) dan Module (modul pembelajaran).
•	Student: Terdaftar dalam Class dan dapat mengikuti jadwal serta menggunakan modul yang disediakan.

