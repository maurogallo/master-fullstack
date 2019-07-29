// IMPORTS NECESARIOS
import { moduleWithProviders, ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule, Route } from '@angular/router';

// IMPORTAR COMPONENTES
import { LoginComponent } from './components/login/login.component';
import { RegisterComponent } from './components/register/register.component';
import { HomeComponent } from './components/home/home.component';
import { ErrorComponent } from './components/error/error.component';

// DEFINIR LAS RUTAS
const appRoutes: Routes = [
  {path: '', component: LoginComponent},
  {path: 'inicio', component: LoginComponent},
  {path: 'login', component: LoginComponent},
  {path: 'registro', component: RegisterComponent},
  {path: '**', component: ErrorComponent}

];

// EXPORTAR CONFIGURACION
export const appRoutingProviders: any[] = [];
export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);
