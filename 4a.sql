select * from dumcourse.course c ;  -- menampilkan semua course

select c.name as name_course, c.duration , a.name as name_author, c.deskription , c.thumbnail from dumb_course.course c 
join dumb_course.author a 
	on a.id = c.id_author ; -- menampilkan course beserta penulis lengkap dengan content nya, field ditampilkan name course, durasi course, name author, description course, thumbnail course
	
select * from dumcourse.content c 
	where id_course = 1; -- menampilkan detail content berdasarkan id