import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { user } from '../models/user';


@Injectable()
export class UserService {

  constructor(
    public _http: HttpClient
  ){

  }

  test(){
    return "hola mundo desde un servicio!!";
  }
}
