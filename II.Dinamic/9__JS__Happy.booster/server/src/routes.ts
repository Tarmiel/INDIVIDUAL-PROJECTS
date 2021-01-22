import {Router} from 'express';
import multer from 'multer'

import UploadConfig from './conf/upload';
import OrphanagesController from './controllers/OrphanagesController';

const routes = Router();
const upload = multer(UploadConfig);

//listar
routes.get('/orphanages', OrphanagesController.index);
//detalhe
routes.get('/orphanages/:id', OrphanagesController.show);
//criar
routes.post('/orphanages', upload.array('images') ,OrphanagesController.create);

export default routes;