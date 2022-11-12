Api endpoints:
GET  /api/reviews -> trae todas los registros.
GET  /api/reviews/:ID ->trae una registro en especifico.
GET  /api/reviews?sort=(nombre_campo)&order=(asc o desc) ->trae todas las reviews ordenadas de manera ascendente o descendente por el campo que se especifica.
DELETE /api/reviews/:ID ->elimina un registro.
POST  /api/reviews  ->crea un registro ingresando review, estrellas e item, el id del registro se genera de manera automatica autoincremental. 