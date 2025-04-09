import { type BreadcrumbItem, type SharedData } from '@/types';
import { Head, useForm } from '@inertiajs/react';
import { FormEventHandler } from 'react';
import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';

import { Card, CardHeader, CardTitle, CardDescription, CardContent, CardFooter } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { TextArea } from '@/components/ui/textarea';
import { Button } from '@/components/ui/button';
import { LoaderCircle } from 'lucide-react';
import AppLayout from '@/layouts/app-layout';



const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Product example',
    href: '/product-test',
  },
];

interface ProductUserForm {
  firstName: string;
  lastName: string;
  secondLastName: string;
  email: string;
  description: string;
}

export default function RegisterUser() {

  const { data, setData, post, reset, errors, processing, recentlySuccessful } = useForm({
    firstName: '',
    lastName: '',
    secondLastName: '',
    email: '',
    description: '',
  });

  const submitForm: FormEventHandler = (e) => {
    e.preventDefault();
    post(route('productUserTest.store'), {
      preserveScroll: true,
      onSuccess: () => reset(),
      // onError: (errors) => {},
    });
};


  
  return (
    <AppLayout breadcrumbs={breadcrumbs}>
      <Head title="Sección Register User" />
      <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
        {/* Grid de los placeholders */}
        <div className="grid auto-rows-min gap-4 md:grid-cols-3">
          <h1>Welcome</h1>
          <Card>
            <CardHeader>
              <CardTitle>Registro de Usuario</CardTitle>
              <CardDescription>Completa los campos para registrar a un nuevo usuario.</CardDescription>
            </CardHeader>

            <form onSubmit={submitForm}>
              <CardContent>
                <div className="grid grid-cols-1 gap-4 md:grid-cols-2">
                  <div className="flex flex-col gap-2">
                    <Label htmlFor="firstName">Nombre</Label>
                    <Input
                      type="text"
                      id="firstName"
                      name="firstName"
                      value={data.firstName}
                      onChange={(e) => setData('firstName', e.target.value)} 
                      placeholder="Escribe tu nombre"
                    />
                     {errors.firstName && <p className="text-red-500 text-sm">{errors.firstName}</p>}
                  </div>

                  <div className="flex flex-col gap-2">
                  <Label htmlFor="lastName">Apellido</Label>
                  <Input
                      type="text"
                      id="lastName"
                      name="lastName"
                      value={data.lastName}
                      onChange={(e) => setData('lastName', e.target.value)} 
                      placeholder="Escribe tu apellido"
                    />
                     {errors.lastName && <p className="text-red-500 text-sm">{errors.lastName}</p>}
                  </div>

                  <div className="flex flex-col gap-2">
                    <Label htmlFor="secondLastName">Segundo apellido</Label>
                    <Input
                      type="text"
                      id="secondLastName"
                      name="secondLastName"
                      value={data.secondLastName}
                      onChange={(e) => setData('secondLastName', e.target.value)}
                      placeholder="Escribe tu segundo apellido"
                    />
                    {errors.secondLastName && <p className="text-red-500 text-sm">{errors.secondLastName}</p>}
                  </div>

                  <div className="flex flex-col gap-2">
                    <Label htmlFor="email">Correo Electrónico</Label>
                    <Input
                      type="email"
                      id="email"
                      name="email"
                      value={data.email}
                      onChange={(e) => setData('email', e.target.value)}
                      placeholder="Escribe tu correo electrónico"
                    />
                     {errors.email && <p className="text-red-500 text-sm">{errors.email}</p>}
                  </div>

                  <div className="flex flex-col gap-2 col-span-2">
                    <Label htmlFor="description">Descripción</Label>
                    <TextArea
                     id="description"
                     name="description"
                     value={data.description}
                     onChange={(e) => setData('description', e.target.value)}
                     placeholder="Escribe una breve descripción"
                     rows={6}
                    />
                    {errors.description && <p className="text-red-500 text-sm">{errors.description}</p>}
                  </div>
                </div>
              </CardContent>
              <CardFooter>
              <div className="flex items-center gap-2 mt-6">
                <Button disabled={processing} variant="secondary" className="w-full space-y-6">
                  {processing ? (
                    <>
                      <LoaderCircle className="h-4 w-4 animate-spin" />
                      Registrando
                    </>
                  ) : (
                    "Registrar"
                  )}
                </Button>
              </div>

              </CardFooter>
            </form>
          </Card>
        </div>

        <div className="border-sidebar-border/70 dark:border-sidebar-border relative min-h-[100vh] flex-1 overflow-hidden rounded-xl border md:min-h-min">
          <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
        </div>
      </div>
    </AppLayout>
  );
}
