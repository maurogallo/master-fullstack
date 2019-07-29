import { Component, OnInit } from '@angular/core';
import { user } from '../../models/user';
import { UserService } from '../../services/user.service';

@Component({
  selector: 'register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css'],
  providers: [UserService]
})
export class RegisterComponent implements OnInit {
  public page_title: string;
  public user: user;

  constructor(
    private _userService: UserService
  ) {
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
    console.log(this._userService.test());
  }

  onSubmit(form){
    console.log(this.user);
    form.reset();
  }

}
