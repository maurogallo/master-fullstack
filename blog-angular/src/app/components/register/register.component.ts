import { Component, OnInit } from '@angular/core';
import { user } from '../../models/user';

@Component({
  selector: 'register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  public page_title: string;
  public user: user;

  constructor() {
    this.page_title = 'Registrate';
    this.user = new user(1, '', '', 'ROLE_USER', '', '', '', '');
/*
    public id: number,
    public name: string,
    public surname: string,
    public role: string,
    public email: string,
    public password: string,
    public description: string,
    public image: string*/
   }

  ngOnInit() {
    console.log('componenente de registro lanzado');
  }

  onSubmit(form){
    console.log(this.user);
  }

}
